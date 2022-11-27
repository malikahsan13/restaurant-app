FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer​ | php -- \ --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

RUN composer install

RUN cp .env.example .env

CMD php artisan key:generate && php artisan cache:clear && php artisan route:clear && php artisan route:cache && php artisan serve --host 0.0.0.0