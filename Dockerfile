FROM php:8.2-cli

# Instalar dependências e extensão zip
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Instalar dependências Laravel
RUN composer install --optimize-autoloader --no-dev
RUN php artisan config:cache && php artisan route:cache

# Instalar dependências frontend
RUN npm install && npm run build

CMD php artisan serve --host=0.0.0.0 --port=$PORT