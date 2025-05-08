# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala dependencias
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev libpng-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio raíz
WORKDIR /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instala dependencias del proyecto
RUN composer install --no-dev --optimize-autoloader

# Da permisos a Laravel
RUN chmod -R 775 storage bootstrap/cache

# Expone el puerto de Apache
EXPOSE 80

# Inicia Apache en primer plano
CMD ["apache2-foreground"]
