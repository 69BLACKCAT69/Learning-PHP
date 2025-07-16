<?php
$animales = [
    new Perro("Rex", 4),
    new Gato("Michi", 3),
    new Pajaro("Piolín", 1)
];

foreach ($animales as $animal) {
    echo $animal->describir() . "<br>";
    echo $animal->hacerSonido() . "<br><br>";
}
?>
