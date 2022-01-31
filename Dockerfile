FROM php:7.4-fpm
RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev \
    && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl 
RUN docker-php-ext-install imap mysqli pdo pdo_mysql
RUN pecl install mailparse && docker-php-ext-enable mailparse

# install zip
RUN apt-get update && apt-get install -y --fix-missing \
    apt-utils \
    gnupg

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

RUN echo "memory_limit=1024M" > /usr/local/etc/php/php.ini
COPY --from=composer:2.1 /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/uvdesk
COPY . .

RUN composer install
