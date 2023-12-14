# Auth_API - LARAVEL

Este es un proyecto de Laravel 10 con una base de datos llamada "laravel".

## Instalación

1. Clona el repositorio
   ```sh
   git clone https://github.com/kenyiv-delfosti/Auth_API

2. Instala los paquetes de Composer
    ```sh
    composer install

3. Crea una copia de tu archivo .env
    ```sh
    cp .env.example .env

4. Genera una clave de encriptación para la aplicación
    ```sh
    php artisan key:generate

5. Crea una base de datos vacía para nuestra aplicación "laravel"

6. En el archivo .env, agrega la información de la base de datos para que Laravel se pueda conectar

7. Migra la base de datos y seeder
    ```sh
    php artisan migrate --seed    
