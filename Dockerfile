FROM php:7.4.33-apache
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_mysql
WORKDIR /app
COPY . /app
RUN composer install
CMD php artisan serve --host=127.0.0.1 --port=8181
EXPOSE 8181
