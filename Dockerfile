FROM php:7.4-fpm-alpine

WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql 

RUN apk add --no-cache zip libzip-dev
RUN docker-php-ext-install zip