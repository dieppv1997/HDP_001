    echo done
    cd  /var/www/acms_hr_api && docker-compose down
    cd  /var/www/acms_hr_api && docker-compose up -d
    cd  /var/www/acms_hr_api && docker-compose exec -it app composer install
    cd  /var/www/acms_hr_api && docker-compose exec -it app php artisan migrate
    cd  /var/www/acms_hr_api && docker-compose exec -it app rm -rf public/storage
    cd  /var/www/acms_hr_api && docker-compose exec -it app php artisan storage:link
    cd  /var/www/acms_hr_api && docker-compose exec -it app composer dumpautoload
