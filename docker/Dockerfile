FROM php:8.1-fpm
RUN apt-get update -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql


# Add correct rights for www folder.
RUN chown -R www-data:www-data /var/www/

# Install and enable xdebug.
RUN pecl install xdebug && docker-php-ext-enable xdebug

WORKDIR /var/www/html

EXPOSE 80 443
