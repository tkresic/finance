#!/bin/sh

# sleep 10

php artisan migrate:refresh --seed
php artisan swoole:http start

