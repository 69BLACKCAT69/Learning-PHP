<?php
class Persona {
    public $nombre;
    public $edad;

    public function saludar() {
        echo "Hola, me llamo " . $this->nombre . " y tengo " . $this->edad . " años.<br>";
    }
}

$persona1 = new Persona();
$persona1->nombre = "Ana";
$persona1->edad = 30;

$persona1->saludar(); // Salida: Hola, me llamo Ana y tengo 30 años.
?>
