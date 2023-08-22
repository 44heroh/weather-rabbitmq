# import weather

## Installation

1.😀 Склонировать данный репозиторий
2.Перейти в папку .docker
3.Для начала сборки сервисов, описанных в конфигурационных файлах, нужно запустить в консоли внутри папки .docker команду
```sh
docker compose build
``` 
4.Для запуска собранных сервисов из конфигурационного файла нужно ввести в консоли внутри папки .docker команду
```sh
docker compose up
``` 
5.Для начала установки пакетов, прописанных в composer.json, нужно запустить в консоли внутри контейнера php-fpm команду 
```sh
composer install
```
6.Для выполнения всех миграций нужно запустить в консоли внутри контейнера php-fpm команду 
```sh
php bin/console doctrine:migrations:migrate
```
7.Для того, чтобы попасть в админку по http://localhost/admin, нужно:    
a. Для загрузки fixtures в БД запустить в консоли внутри контейнера php-fpm команду 
```sh
php bin/console doctrine:fixtures:load
```
b. Перейти в браузере в http://localhost/admin login - test@test.test pasword - test   
8.Импортировать данные можно 2 способами:    
a. Перейти в браузере в http://localhost/weather/import    
b. Или запустить в консоли внутри контейнера php-fpm команду 
```sh 
php bin/console app:import-weather
```
9.Для того, чтобы начать тесты, нужно запустить в консоли внутри контейнера php-fpm команду 
```sh 
php bin/phpunit
```
10.Можно зайти в браузере и запустить http://localhost/api/weather.json

для теста

Админка выглядит так: 

![Иллюстрация к проекту](https://img001.prntscr.com/file/img001/yeogF1HNTMKSatcM1QSBIw.png)