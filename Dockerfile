FROM php:7.2-apache

RUN pecl install redis-3.1.6 \
    && docker-php-ext-enable redis
