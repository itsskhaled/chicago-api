# Dockerfile

FROM php:8.2-fpm

# تثبيت المتطلبات
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    nano \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd pdo_pgsql

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000