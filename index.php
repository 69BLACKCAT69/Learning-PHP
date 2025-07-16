<?php
require_once 'Perro.php';
require_once 'Gato.php';
require_once 'Conejo.php';

$animales = [
    new Perro("Rex", 5),
    new Gato("Michi", 3),
    new Conejo("Bugs", 2)
];

foreach ($animales as $animal) {
    echo $animal->describir() . "<br>";
    echo $animal->hacerSonido() . "<br>";

    // Si puede comer, usar el método del trait
    if (method_exists($animal, 'comer')) {
        echo $animal->comer("zanahoria") . "<br>";
    }

    // Si implementa Corredor
    if ($animal instanceof Corredor) {
        echo $animal->correr() . "<br>";
    }

    echo "<hr>";
}
