FROM php:8.2-cli-alpine3.17

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add --update --no-cache libgd libpng-dev postgresql-dev libpq-dev

RUN docker-php-ext-install gd pdo pdo_pgsql

WORKDIR /var/www


