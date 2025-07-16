<?php
class Gato extends Animal {
    public function hacerSonido() {
        return "{$this->nombre} dice: ¡Miau!";
    }
}
?>
