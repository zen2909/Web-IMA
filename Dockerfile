FROM php:8.3-fpm

# Install system dependencies + Node.js
RUN apt-get update && apt-get install -y \
    nginx \
    curl \
    git \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    default-mysql-client \
    ca-certificates \
    gnupg \
    && curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Check PHP extensions and Node
RUN php -m | grep -E 'PDO|pdo_mysql' \
    && node --version \
    && npm --version

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Composer files first
COPY composer.json composer.lock ./

# Install production PHP dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

# Copy Laravel project
COPY . .

# Install frontend dependencies and build Vite
RUN npm install \
    && npm run build \
    && rm -rf node_modules

# Remove Laravel cached configuration
RUN rm -f bootstrap/cache/*.php

# Set permissions
RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

RUN rm -rf public/storage \
    && ln -s /var/www/html/storage/app/public /var/www/html/public/storage

# Nginx configuration
COPY nginx.conf /etc/nginx/sites-available/default

EXPOSE 8080

# Start PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]