FROM php:8.2-cli

RUN apt-get update && apt-get install -y libzip-dev unzip git nodejs npm libicu-dev libxml2-dev \
    && docker-php-ext-install zip bcmath intl dom

WORKDIR /app
COPY . .

RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache bootstrap/cache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

# Instala dependências e gera assets
RUN npm install && npm run build

# Permissões para escrita
RUN chmod -R 777 storage bootstrap/cache

# Otimiza para produção
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

CMD php artisan serve --host=0.0.0.0 --port=$PORT
