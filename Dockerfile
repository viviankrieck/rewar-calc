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

# Instala dependências Laravel com ignore-platform-req para ext-zip
RUN composer install --ignore-platform-req=ext-zip --optimize-autoloader --no-dev

# Instala dependências frontend
RUN npm install && npm run build

# Configura variáveis de ambiente
RUN php artisan config:clear && php artisan config:cache

# Configura views cache
RUN php artisan view:clear && php artisan view:cache

# Inicia o servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT