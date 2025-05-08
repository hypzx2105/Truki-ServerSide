FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies and Node.js
RUN apt-get update && apt-get install -y \
    libsqlite3-dev zip unzip git curl gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install pdo pdo_sqlite

# Enable Apache rewrite and set Laravel's public directory as the root
RUN a2enmod rewrite \
    && sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Install Composer from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application source
COPY . .

# Permissions for Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 storage bootstrap/cache

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Build Vite frontend assets (skip error if no Vite setup)
RUN npm install && npm run build || echo "Vite build skipped"

# Prepare Laravel environment
RUN php artisan config:clear \
    && php artisan key:generate || true \
    && php artisan migrate --force || true

EXPOSE 80
