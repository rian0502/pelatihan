#!/bin/bash

# Set options
set -o monitor
trap "exit" SIGCHLD

# Start Nginx
nginx -g "daemon off;" &

# Start PHP-FPM 8.1
php-fpm8.1 -F &

# Wait for child processes
wait
