<?php
class Animal {
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function describir(): string {
        return "Soy {$this->nombre} y tengo {$this->edad} años.";
    }

    public function hacerSonido(): string {
        return "Hago un sonido genérico.";
    }
}
?>
