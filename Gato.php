<?php
require_once 'Animal.php';
require_once 'traits/Come.php';

class Gato extends Animal {
    use Come;

    public function hacerSonido(): string {
        return "{$this->nombre} dice: ¡Miau!";
    }
}
?>
