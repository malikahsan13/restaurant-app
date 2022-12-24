#!/bin/bash

if [ ! -f "vendor/autoload.php"]; then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env" ]; then
    echo "Generating env file"
    copy .env.example .env
else
    echo "env file exist"
fi

php artisan serve --port=$PORT 
exec docker-php-entrypoint "$@"
