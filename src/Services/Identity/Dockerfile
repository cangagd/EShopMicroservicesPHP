FROM composer:2

RUN install-php-extensions pdo pgsql pdo_pgsql

RUN curl -sS https://get.symfony.com/cli/installer | bash

RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /app/identity

# COPY . .

#RUN composer install

EXPOSE 4000
