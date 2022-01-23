FROM node:17.4.0

ENV NODE_ENV=production
WORKDIR /src
RUN npm install --production

FROM php:8.0-apache
COPY src/ /var/www/html/