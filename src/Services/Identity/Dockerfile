FROM composer:2

RUN install-php-extensions pdo pgsql pdo_pgsql

WORKDIR /app/identity

COPY . .

RUN composer install

EXPOSE 4000
