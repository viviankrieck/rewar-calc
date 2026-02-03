FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    libzip-dev unzip git nodejs npm libicu-dev libxml2-dev \
    && docker-php-ext-install zip bcmath intl dom

WORKDIR /app
COPY . .

# Criar diretórios necessários
RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Instalar dependências
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

# Build frontend
RUN npm ci && npm run build

# Otimizar cache para produção
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Inicia o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT

# CMD php -d display_errors=stderr -S 0.0.0.0:${PORT:-8080} -t public
