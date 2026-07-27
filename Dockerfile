FROM laravelsail/php82-composer

# Instala dependências do sistema e Node.js
RUN apt-get update && apt-get install -y \
    unzip libzip-dev git \
    libicu-dev libxml2-dev \
    curl \
    && docker-php-ext-install zip bcmath intl dom

# Instala a versão atual do Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

WORKDIR /app
COPY . .

# Instala dependências do PHP e do Front-end
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Garante permissões das pastas de storage e cache
RUN chmod -R 777 storage bootstrap/cache

# Inicia a aplicação na porta configurada pelo Render
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
