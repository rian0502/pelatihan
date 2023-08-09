#!/bin/bash
set -o monitor
trap exit SIGCHLD
# Start nginx
nginx -g 'daemon off;' &
# start php-fpm
php-fpm8.1 -F &
wait