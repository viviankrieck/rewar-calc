# Mantendo sua base (mas PHP 8.2 oficial é mais leve para produção)
FROM php:8.2-cli

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git nodejs npm \
    && docker-php-ext-install zip

# Define diretório de trabalho
WORKDIR /app

# Copia os arquivos
COPY . .

# CRUCIAL: Cria as pastas que o Laravel exige (evita o erro que você teve no log)
RUN mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/framework/cache \
    && mkdir -p bootstrap/cache


# Instala extensão DOM necessária
    RUN apt-get update && apt-get install -y libxml2-dev \
    && docker-php-ext-install dom

# Instala extensões PHP necessárias
    RUN apt-get update && apt-get install -y libicu-dev \
    && docker-php-ext-install zip bcmath intl


# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

# Instala Frontend
RUN npm install && npm run build

# Ajusta permissões (Usando o diretório /app definido no WORKDIR)
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache \
    && chmod -R 775 /app/storage /app/bootstrap/cache

# 1. Garanta permissão total para teste (evita o erro 500 silencioso)
RUN chmod -R 777 storage bootstrap/cache

# 2. LIMPE tudo em vez de cachear (o Laravel vai gerar em tempo de execução)
RUN php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    php artisan cache:clear
# Inicia o servidor (O Railway exige que ouça em 0.0.0.0)
CMD php -S 0.0.0.0:$PORT -t public
