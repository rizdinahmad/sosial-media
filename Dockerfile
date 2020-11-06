FROM nginx:latest

WORKDIR /var/www/html

RUN php7.2-fpm

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . .
