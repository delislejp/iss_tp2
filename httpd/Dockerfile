# Dockerfile
FROM httpd:alpine
# Utilise une petite image

RUN apk update; \
    apk upgrade;
# Mets a jour le serveur

RUN mkdir /srv/htdocs
# Ajouter le repertoire pour les documents HTML

EXPOSE 80 443
# Exposer les ports 80 et 443

WORKDIR /usr/local/apache2/conf
# Change dans le repertoire de configuration

COPY ./conf/httpd.conf httpd.conf
# Remplacer httpd.conf par le mien
