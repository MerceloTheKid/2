Instrucciones de instalacion:

Este backend fue creado con laragon, si usa una base de datos distinta, debe usar su base de daton en los pasos en los que se indica que se use laragon.

1._installar laragon

2._Abrir con la terminar la ubicacion C:\laragon\www\ y ejecutar el comando: git clone https://github.com/MerceloTheKid/Backend-mundo-pacifico.git

3._Si no tiene composer instalado ejecutar el comando: composer install

4._Cambiar el nombre del archivo .env.example a .env

5._Crear una base de datos llamada "testeo" en laragon

6._En el archivo .env cambiar la linea 14 por: DB_DATABASE=testeo

7._Abrir laragon e iniciar su servicio de base de datos

8._En la terminal ejecutar los siguientes comandos:
    php artisan key:generate
    php artisan db:seed
    php artisan migrate:fresh
    php artisan serve

9._ ya esta corriendo la api para hacer consultas desde el frontend
