<p align="center"><img src="https://buromall.com/imagens/logos/web-logo.png"></p>

# Buromall

Una web diferente de comercio electronico donde comprar es divertido, dando opciones de publicar y vender.

## Instalacion
- php artisan key:generate
- composer install
- npm install
- php artisan make:auth

## Plugs usados
- composer require laravel/socialite
- composer require epayco/epayco-php
- [Websocket](https://docs.beyondco.de/laravel-websockets/)
- [Tracker](https://github.com/antonioribeiro/tracker)
- [Cart](https://github.com/darryldecode/laravelshoppingcart)
- [Seeders](https://packagist.org/packages/orangehill/iseed)
- [qr and bar](https://github.com/codeitnowin/barcode-generator)
- [web](https://www.kodementor.com/upload-multiple-images-in-laravel-5-7-tutorial/)
## Paquetes pendientes por decidir si se usa o no
- [Permisos y roles](https://github.com/spatie/laravel-permission) //pendiente
- [friends](https://github.com/hootlex/laravel-friendships?ref=madewithlaravel.com)

## Comandos mas usados
- composer dump-autoload
- php artisan migrate
- php artisan db:seed
- php artisan migrate:fresh
- php artisan migrate:fresh --seed
php artisan cache:clear
php artisan route:clear
php artisan view:clear
php artisan config:clear
php artisan route:cache
php artisan config:cache
- php artisan websockets:serve /ws-site-app
