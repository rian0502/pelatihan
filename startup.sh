#!/bin/bash
set -o monitor
trap exit SIGINT
# Start nginx
nginx -g 'daemon off;' &
# start php-fpm
php-fpm -F &
wait