# Тестовое задание

[Ссылка на тз](https://docs.google.com/document/d/1nZda6NbiJf9k4cQydQ4eGGIJpkyXn-F9q54x8E6UG0c/edit)

1. Склонировать проект
```shell
git clone git@github.com:olegsv3007/articles_tz.git
```

2. Перейти в папку проекта и запустить скрипт deploy.sh
```shell
cd articles_tz
./deploy.sh
```

3. Наполнить базу данными (опционально)
```shell
docker-compose exec articles-app php artisan db:seed
```
