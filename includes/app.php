<?php 
use Dotenv\Dotenv;
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__); //Creamos una instancia de phpEnv donde le indicamos la ubicacion del archivo .env
$dotenv->safeLoad(); //Metodo para que si el archivo .env no existe no marque error.

require 'funciones.php';
require 'database.php';


// Conectarnos a la base de datos

use Model\ActiveRecord;
ActiveRecord::setDB($db);