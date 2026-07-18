FROM node:20-bookworm-slim AS assets
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY resources ./resources
COPY vite.config.js ./
RUN npm run build

FROM composer:2 AS vendor
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --prefer-dist --optimize-autoloader --no-interaction

FROM php:8.3-cli-bookworm
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y --no-install-recommends libonig-dev libxml2-dev \
    && docker-php-ext-install mbstring xml \
    && rm -rf /var/lib/apt/lists/*
COPY . ./
COPY --from=vendor /app/vendor ./vendor
COPY --from=assets /app/public/build ./public/build
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache
EXPOSE 10000
CMD sh -c "php artisan optimize:clear && php -S 0.0.0.0:${PORT:-10000} -t public"
