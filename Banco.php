<?php
class CuentaBancaria {
    public $titular;        // público
    private $saldo;         // privado
    protected $banco;       // protegido

    public function __construct($titular, $saldo, $banco) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->banco = $banco;
    }

    // Método para ver el saldo
    public function verSaldo() {
        return $this->saldo;
    }

    // Método para depositar dinero
    public function depositar($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
        }
    }

    // Método para ver el banco
    public function verBanco() {
        return $this->banco;
    }
}

$cuenta = new CuentaBancaria("Ana", 1000, "Banco XYZ");

echo "Titular: " . $cuenta->titular . "<br>";
echo "Saldo: " . $cuenta->verSaldo() . "<br>";
echo "Banco: " . $cuenta->verBanco() . "<br>";

// Depositar dinero
$cuenta->depositar(500);

echo "Saldo después del depósito: " . $cuenta->verSaldo() . "<br>";
?>
