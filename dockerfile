FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www

COPY . .

RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

# Crea directorios y configura permisos
RUN mkdir -p /var/www/storage/app/public/IMG \
    && mkdir -p /var/www/public/IMG \
    && chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/public/IMG

# Copia y configura el script de despliegue

EXPOSE 10000

CMD /usr/local/bin/00-laravel-deploy.sh && php artisan serve --host=0.0.0.0 --port=$PORT