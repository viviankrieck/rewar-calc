FROM laravelsail/php82-composer

# Instala Node.js e npm
RUN apt-get update && apt-get install -y nodejs npm

# Instala extensão zip (necessária para Composer)
RUN apt-get update && apt-get install -y \
    unzip libzip-dev git nodejs \
    libicu-dev libxml2-dev \
    && docker-php-ext-install zip bcmath intl dom

WORKDIR /app
COPY . .

# Instala dependências Laravel
RUN composer install --optimize-autoloader --no-dev

# Build frontend
RUN npm install && npm run build

# Limpa e recacheia configs
RUN php artisan config:clear && php artisan route:clear && php artisan view:clear
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

CMD php artisan serve --host=0.0.0.0 --port=$PORT