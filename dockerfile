FROM wyveo/nginx-php-fpm:php82

# Instala dependencias adicionales
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libpq-dev \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql pdo_pgsql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY . .

# Instala dependencias y compila assets
RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

# Crea el directorio public/IMG si es necesario
RUN mkdir -p /var/www/html/public/IMG \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/public/IMG

# Configuración para NGINX
COPY ./conf/nginx/nginx-site.conf /etc/nginx/conf.d/default.conf

# Script de despliegue
COPY ./scripts/00-laravel-deploy.sh /usr/local/bin/00-laravel-deploy.sh
RUN chmod +x /usr/local/bin/00-laravel-deploy.sh

# Variables de entorno
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV WEBROOT /var/www/html/public
ENV RUN_SCRIPTS 1

CMD ["/start.sh"]