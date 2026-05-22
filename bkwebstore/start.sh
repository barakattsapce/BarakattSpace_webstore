#!/bin/sh

echo "Clearing Laravel caches..."

php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

echo "Running migrations..."

php artisan migrate --force || true

echo "Starting Laravel server..."

php artisan serve --host=0.0.0.0 --port=10000