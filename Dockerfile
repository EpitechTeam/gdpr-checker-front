FROM php:7.3.0-apache

COPY dist/ /var/www/html

EXPOSE 80