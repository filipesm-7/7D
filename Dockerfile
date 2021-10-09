
#specify base image
FROM php:7.4-cli

#update apt and install tools
RUN apt-get update && apt-get install -y \
    vim

#copy files to server root
COPY ./Classes /var/www/html