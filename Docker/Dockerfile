FROM php:8.2-fpm

#sudo permission
#RUN mkdir /home/container
#RUN chown -R 405 /home/container
#USER harut613


#install php extensions
RUN apt-get update && apt-get install -y \
       apt-utils \
       libpq-dev \
       libpng-dev \
       libzip-dev \
       zip unzip \
       git && \
       docker-php-ext-install pdo_mysql mysqli && \
       docker-php-ext-install bcmath && \
       docker-php-ext-install gd && \
       docker-php-ext-install zip &&\
       apt-get clean && \
       rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

#copy application files to the working directory
COPY ./Docker/Nginx/PHP/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN   curl -sS https://getcomposer.org/installer | php -- \
      --filename=composer \
      --install-dir=/usr/local/bin

WORKDIR /var/www/
