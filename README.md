# Saseb

## Como instalar

> 1. Instala git

> 2. Instala laragon

> 3. Instala composer apuntando al php que esta dentro de la carpeta de instalacion de laragon en bin

> 4. Instala Node.js sin las herramientas extra

> 5. Ejecuta laragon

> 6. Ejecuta los siguientes comandos

``` 
git clone 'url del repositorio'
```
```
cd saseb
```
```
composer install
```
```
npm install
```
```
cp .env.example .env
```
```
php artisan key:generate
```
> 7. Crear la base de datos con el nombre laravel
```
php artisan migrate:fresh --seed
```
```
php artisan serve
```
```
npm run dev
```
