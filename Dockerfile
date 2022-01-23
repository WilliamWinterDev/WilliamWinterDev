FROM php:8.0-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/
RUN apk add --update nodejs nodejs-npm

RUN npm install