<?php
class Animal {
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function describir() {
        return "Soy un animal llamado {$this->nombre} y tengo {$this->edad} años.";
    }

    public function hacerSonido() {
        return "Este animal hace un sonido genérico.";
    }
}
?>