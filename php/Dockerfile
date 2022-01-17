FROM php:7.4-fpm
RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev \
    && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl 
RUN docker-php-ext-install imap mysqli pdo pdo_mysql
RUN pecl install mailparse && docker-php-ext-enable mailparse
