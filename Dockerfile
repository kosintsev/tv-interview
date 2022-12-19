FROM php:7.4-apache
RUN docker-php-ext-install mysqli

RUN chown -R www-data /var/www
RUN true \
    && chown -R www-data /var/www

CMD ["apache2-foreground"]
WORKDIR /var/www