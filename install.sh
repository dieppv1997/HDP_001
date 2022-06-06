docker-compose down
docker-compose up -d
# docker-compose exec app composer install
docker-compose exec app php artisan key:generate
# docker-compose exec app php artisan migrate:refresh --seed --force

docker-compose exec app rm -rf public/storage
docker-compose exec app php artisan storage:link
docker-compose exec app composer dump-autoload
