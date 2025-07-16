<?php
require_once 'Animal.php';

class Conejo extends Animal {
    public function hacerSonido(): string {
        return "{$this->nombre} dice: (ruido de mordisqueo)";
    }
}
?>
