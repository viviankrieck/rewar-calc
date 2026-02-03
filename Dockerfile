FROM php:8.2-cli

RUN apt-get update && apt-get install -y libzip-dev unzip git nodejs npm libicu-dev libxml2-dev \
    && docker-php-ext-install zip bcmath intl dom

WORKDIR /app
COPY . .

RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache bootstrap/cache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Permissões totais para evitar erro 500 de escrita
RUN chmod -R 777 storage bootstrap/cache

# Instala e gera assets
RUN npm install && npm run build

# Limpa caches de arquivos apenas
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear

CMD php artisan serve --host=0.0.0.0 --port=$PORT
