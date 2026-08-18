FROM php:8.4-fpm

# Dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    zip \
    && docker-php-ext-install \
        pdo_pgsql \
        pgsql \
        bcmath \
        pcntl \
        zip \
        intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Permisos para Laravel
RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php-fpm"]