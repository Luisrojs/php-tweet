<?php

// Declaramos las variables
$texto = "En algun lugar de la mancha"; 
$autor = "Miguel de cervante";
$user = "ElmancoDeLepanto";

//hacemos una variable con un array para generar varios tweets
$tweets = [
    [
      "texto"=>"En algun lugar de la mancha",
      "autor"=>"Miguel de Cervantes",
      "user"=>"EnMancoDeLepanto"
    ],
    [
      "texto"=>"El señor de los anillos",
      "autor"=>"Tolkien",
      "user"=>"Martha"
    ],
    [
      "texto"=>"La llamada de cthulhu",
      "autor"=>"LOvecraft",
      "user"=>"Lrojs",
    ],
];

$jsontweet = file_get_contents("tweets.json");
/* Tiene dos argumentos, el primero que es la variable 
y true por que por defecto lo transforma en un objeto. */

$jsonArray = json_decode($jsontweet, true); // Lo alamacenamos en un variable




/*esto para ver que pinta
 print_r($jsonArray);
exit;
 */


// Declaro el require
require_once "index.html";

