FROM php:8.0.5-fpm

RUN apt-get install autoconf
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug