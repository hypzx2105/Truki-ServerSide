FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    zip unzip git curl

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
