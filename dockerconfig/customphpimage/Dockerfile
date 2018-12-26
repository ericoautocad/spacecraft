FROM php:7-fpm 

RUN apt-get update && apt-get install -y zip unzip git 
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer
WORKDIR /application
COPY composer.json .
COPY . .
