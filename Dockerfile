
FROM php:8.2-apache

#Copies all file to apache
COPY . /var/www/html/

RUN docker-php-ext-install mysqli


EXPOSE 80

