FROM php:7.3-apache
 COPY ./php.ini /usr/local/etc/php/
 # composer
 COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
docker-php-ext-install pdo_mysql mysqli mbstring && \
apt-get install -y vim git

# composer
RUN apt-get install -y unzip

# apacheの有効化コマンド:a2enmod rewrite
#（有効化の後は再起動が必要）