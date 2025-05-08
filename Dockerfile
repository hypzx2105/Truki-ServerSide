FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and Node.js for Vite
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    zip unzip git curl gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo pdo_sqlite

# Enable Apache rewrite module and set DocumentRoot to /public
RUN a2enmod rewrite \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Install Composer (via official image layer)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy all files
COPY . .

# Set correct permissions for Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build frontend assets (only if you use Vite/Laravel Breeze)
RUN npm install && npm run build || echo "Vite build skipped"

# Ensure Laravel environment is set up
RUN cp .env .env.production || true
RUN php artisan config:clear
RUN php artisan key:generate || true

# Run DB migrations (SQLite assumed already present in repo)
RUN php artisan migrate --force || true

EXPOSE 80
