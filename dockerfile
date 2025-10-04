# ===========================
# Dockerfile para Laravel 10
# ===========================

FROM php:8.2-cli

# ===========================
# Instalar dependencias del sistema
# ===========================
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
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_pgsql

# ===========================
# Composer
# ===========================
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ===========================
# Node.js y NPM
# ===========================
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# ===========================
# Directorio de trabajo
# ===========================
WORKDIR /var/www

# ===========================
# Copiar proyecto
# ===========================
COPY . .

# ===========================
# Crear carpetas y permisos
# ===========================
RUN mkdir -p /var/www/storage/app/public/carousels \
    && mkdir -p /var/www/public/img \
    && chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/public/img

# ===========================
# Instalar dependencias de PHP y Node
# ===========================
RUN composer install --optimize-autoloader --no-dev \
    && npm install \
    && npm run build

# ===========================
# Crear enlace simbólico storage
# ===========================
RUN php artisan storage:link

# ===========================
# Ajuste final de permisos
# ===========================
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# ===========================
# Exponer puerto
# ===========================
EXPOSE 10000

# ===========================
# Comando por defecto
# ===========================
CMD php artisan migrate --force \
    && php artisan serve --host=0.0.0.0 --port=10000
