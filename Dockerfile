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
# RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 2. LIMPE tudo em vez de cachear (o Laravel vai gerar em tempo de execução)
RUN php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan cache:clear

# Inicia o servidor Laravel
# CMD php artisan serve --host=0.0.0.0 --port=$PORT
CMD php -S 0.0.0.0:$PORT -t public
