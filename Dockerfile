#FROM nginx:latest
FROM php:7.3.22-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . .
