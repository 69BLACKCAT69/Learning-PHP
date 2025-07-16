<?php
trait Come {
    public function comer(string $comida): string {
        return "{$this->nombre} está comiendo {$comida}.";
    }
}
