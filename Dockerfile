FROM php:7.3-apache

LABEL maintainer="Ronnie <email@chaottiic.com>"

COPY . /app

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /app && a2enmod rewrite

