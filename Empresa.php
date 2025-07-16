<?php

// Clase Producto
class Producto {
    private int $id;
    private string $nombre;
    private float $precio;

    public function __construct(int $id, string $nombre, float $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function __toString(): string {
        return "{$this->nombre} - \$" . number_format($this->precio, 2);
    }
}

// Clase Usuario
class Usuario {
    private string $nombre;
    private Carrito $carrito;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
        $this->carrito = new Carrito();
    }

    public function getCarrito(): Carrito {
        return $this->carrito;
    }

    public function getNombre(): string {
        return $this->nombre;
    }
}

// Clase Carrito
class Carrito {
    private array $productos = [];

    public function agregarProducto(Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function listarProductos(): void {
        echo "🛒 Productos en el carrito:\n";
        foreach ($this->productos as $producto) {
            echo " - $producto\n";
        }
        echo "💵 Total: $" . number_format($this->calcularTotal(), 2) . "\n";
    }

    public function calcularTotal(): float {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }
}

// ========================
// 🧪 Simulación Web (Prueba)
// ========================

// Crear productos
$producto1 = new Producto(1, "Laptop HP", 15000);
$producto2 = new Producto(2, "Mouse Inalámbrico", 500);
$producto3 = new Producto(3, "Monitor 24''", 3200);

// Crear usuario
$usuario = new Usuario("Empresa ABC");

// Agregar productos al carrito
$usuario->getCarrito()->agregarProducto($producto1);
$usuario->getCarrito()->agregarProducto($producto2);
$usuario->getCarrito()->agregarProducto($producto3);

// Mostrar el carrito
echo "👤 Usuario: " . $usuario->getNombre() . "\n";
$usuario->getCarrito()->listarProductos();

?>
