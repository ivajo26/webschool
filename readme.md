## WebSchool Project - Laravel Framework 5.0

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Implementacion

# Nota: la implementacion que se da a continuacion es la configuracion de forma local de la plataforma WebSchool en Gnu/Linux



- Instalar curl 

	sudo apt-get install php5-curl

- Con curl instalar composer

	curl -sS https://getcomposer.org/installer | php

- Clonar el repositorio

	git clone https://github.com/ivajo26/webschool.git

- Ingresar dentro de la carpeta clonada webschool

- Instalar la carpeta vendor

	composer install

- Combinar los archivos del login con los descargados del composer install

	git checkout -- .
	git pull 

- Tambien se puede evitar el paso anterior y hacer
	composer install && composer update

- Cambiar el nombre del archivo .env.example por .env y configurar el nombre de la base de datos, usuario y contraseña

- En la terminal vamos a instalar las migraciones 

	- Ingresamos a la carpeta
		cd webschool/

	- Escribir el siguiente comando
		php artisan migrate:install
	
- Luego realizamos el proceso de migrar todas las tablas a la base de datos ya estipulada
	
	php artisan migrate

- Insertamos un dato de ejemplo a la base de datos para poder acceder a la plataforma
	
	php artisan db:seed

- Se ha creado un usario admin con la siguiente informacion
	-Identificacion: 123456789
	-Contraseña = admin123

## Integrantes 

	Deyby Stiven Garcia Montes
	Ivan Jose Diaz Morales



### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
