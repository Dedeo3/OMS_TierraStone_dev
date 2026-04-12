#!/bin/sh
set -x

php-fpm -D

sleep 2

php artisan migrate --force
php artisan permission:cache-reset
php artisan storage:link --force
php artisan config:clear
php artisan cache:clear

APP_PORT=${PORT:-80}

cat > /etc/nginx/http.d/default.conf << EOF
server {
    listen ${APP_PORT};
    root /var/www/public;
    index index.php;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}
EOF

pkill nginx || true
nginx -g "daemon off;"
