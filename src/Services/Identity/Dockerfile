FROM composer:2

WORKDIR /app/identity

RUN install-php-extensions pdo pgsql pdo_pgsql

COPY composer.json .

RUN composer install

EXPOSE 4000
