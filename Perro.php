<?php
require_once 'Animal.php';
require_once 'interfaces/Corredor.php';
require_once 'traits/Come.php';

class Perro extends Animal implements Corredor {
    use Come;

    public function hacerSonido(): string {
        return "{$this->nombre} dice: ¡Guau!";
    }

    public function correr(): string {
        return "{$this->nombre} está corriendo feliz 🐕";
    }
}
?>
