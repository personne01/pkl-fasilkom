FROM php:7.4.14-fpm

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

# RUN install-php-extensions ext-exif
WORKDIR /var/www

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git zip unzip

RUN docker-php-ext-configure exif
RUN docker-php-ext-install exif
RUN docker-php-ext-enable exif

RUN docker-php-ext-install pdo pdo_mysql

RUN chown -R www-data:www-data /var/www
# RUN chmod -R 755 /var/www/storage

