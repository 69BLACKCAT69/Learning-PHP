<?php
class Perro extends Animal {
    public function hacerSonido() {
        return "{$this->nombre} dice: ¡Guau!";
    }
}
?>
