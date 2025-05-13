FROM php:8.4-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev unzip && \
    docker-php-ext-install pdo_mysql zip

COPY . .
RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache
RUN php artisan route:cache

CMD php artisan serve --host=0.0.0.0 --port=8000