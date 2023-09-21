FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get clean && rm -rf /var/lib/apt/lists/*