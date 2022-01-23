FROM php:8.0-apache

WORKDIR /var/www/html

COPY src/ /var/www/html/
RUN apt-get update && apt-get install -y nodejs npm

RUN npm install