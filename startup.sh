set -o monitor
trap exit SIGCHLD
nginx -g "daemon off;" &
php-fpm7.3 -F &
wait
