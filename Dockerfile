# Usa uma imagem com PHP + Node.js pré-instalados
FROM laravelsail/php82-composer

# Instala Node.js e npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instala extensão zip
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Define diretório de trabalho
WORKDIR /app
COPY . .

# Instala dependências Laravel
RUN composer install --optimize-autoloader --no-dev
RUN php artisan config:cache && php artisan route:cache

# Instala dependências frontend
RUN npm install && npm run build

# Inicia o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT