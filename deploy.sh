docker-compose down

git pull origin master

if [ ! -f "./.env" ]; then
    cp ./.env.example ./.env
fi

docker-compose up -d --build

docker-compose exec articles-app composer install --no-interaction --prefer-dist --optimize-autoloader

docker-compose exec articles-app php artisan migrate

docker-compose exec articles-app php artisan cache:clear
docker-compose exec articles-app php artisan auth:clear-resets
docker-compose exec articles-app php artisan route:cache
docker-compose exec articles-app php artisan config:cache
docker-compose exec articles-app php artisan view:cache

docker-compose exec articles-app npm ci
docker-compose exec articles-app npm run production
