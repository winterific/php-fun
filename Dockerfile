FROM php:7.0-apache
COPY apache2.conf /etc/apache2/apache2.conf
RUN a2enmod rewrite
RUN apachectl restart
