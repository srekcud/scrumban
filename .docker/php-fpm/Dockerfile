FROM php:8.2-fpm-alpine3.17

RUN apk add --update --no-cache libgd libpng-dev postgresql-dev libpq-dev

RUN docker-php-ext-install gd pdo pdo_pgsql


WORKDIR /var/www


