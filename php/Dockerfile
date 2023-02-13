# Dockerfile
FROM php:fpm-alpine
# Utilise une petite image

RUN apk update; \
    apk upgrade;
# Mets a jour le serveur
RUN docker-php-ext-install mysqli