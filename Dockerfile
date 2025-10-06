FROM php:7.4-apache

RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get install -y vim
COPY index.html styles.css vid.mp4 /var/www/html/
