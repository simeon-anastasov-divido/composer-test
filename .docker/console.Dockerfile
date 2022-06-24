FROM php:7.4-alpine

RUN apk add --no-cache git composer ${PHPIZE_DEPS}

RUN pecl install pcov && docker-php-ext-enable pcov

RUN mkdir /app

WORKDIR /app