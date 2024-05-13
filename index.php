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

// Declaro el require
require_once "index.html";