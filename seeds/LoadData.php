<?php
require './vendor/autoload.php'; //Carga las librerias que instalaste con composer
use RedBeanPHP\R as r; //Genera un alias para redbean
use Faker\Factory;

$faker = Faker\Factory::create(); //Crea un objeto para generar los datos aleatorios
//Conexión a la base de datos: cambia demobd al nombre de tu base de datos
//cambia root por el usuario de tu base datos
//cambia las comillas vacias, por la clave para la base de datos
r::setup('mysql:host=localhost;dbname=test-precio-com', 'root', '');

for ($i=0; $i < 1000; $i++) {
  $post = r::dispense('usuario'); //Nombre de la tabla (post)
   //Ahora llenas cada campo de tu tabla, por ejemplo 'title', 'content', etc
  $post['nombre'] = $faker->text($maxNbChars = 85); //Texto de hasta 85 letras
  $post['apellidos'] = $faker->lastKanaName;
  $post['dateRegister'] = $faker->dateTime($max = 'now', $timezone = null);
  $post['dateUpdate'] = $faker->dateTime($max = 'now', $timezone = null);
  $post['userAgent'] = $faker->ipv4;
  $post['idCountry'] = $faker->text($maxNbChars = 2, $countryCode=2);
  $post['keyEvent'] = $faker->text($maxNbChars = 6);
  

  r::store($post); //Guardar registro en base de datos
}
?>