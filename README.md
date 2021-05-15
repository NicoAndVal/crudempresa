
## Proyecto de crud de empresas

Una api donde se puede crear, listar, guardar y editar empresas. en el front se utilizo html con blade:

Para utilizar está api es necesario crear una base de datos con el nombre de crudempresas, 
User: root
Password: root

## 1. Clonar repositorio

git clone https://github.com/NicoAndVal/crudempresa.git

## 2. Moverse a la carpeta del proyecto

cd crudempresa

## 3. Crear base de datos en local 

DB_DATABASE=crudempresas
DB_USERNAME=root
DB_PASSWORD=root

Si desea cambiar algún dato se puede hacer desde el archivo .env

## 4. Instalar dependencias

composer install
npm install 

## 5. Migrar las tablas 

php artisan migrate

## 6.Insertar datos de prueba 

php artisan db:seed

## 7. Correr el proyecto 

php artisan serve 

## 8. Abri app 

Ingresar a http://127.0.0.1:8000

## 9. App lista

La aplicación permite crear empresas nuevas desde el botón crear empresa, se puede editar una empresa desde el botón "editar" y eliminar una empresa desde el botón "eliminar empresa"


