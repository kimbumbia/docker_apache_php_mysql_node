FROM php:7.4-apache

# Installing Depencencies.
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get install nano
RUN apt-get update && apt-get install -y git vim

# Permission to apache user to the document root.
RUN chown -R www-data:www-data /var/www/html

# Overwriting the default virtual host.
COPY docker/web/000-default.conf /etc/apache2/sites-enabled/000-default.conf

# Port
EXPOSE 80