#!/usr/bin/env bash
echo "Instalando dependencias..."
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html
echo "Generando clave de app..."
php artisan key:generate --show
echo "Cacheando config y rutas..."
php artisan config:cache
php artisan route:cache
echo "Ejecutando migraciones..."
php artisan migrate --force
echo "Creando usuario admin..."
php artisan db:seed --class=AdminUserSeeder --force