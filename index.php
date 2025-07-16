<?php

// 1. Sintaxis Básica y Salida
echo "<h1>1. Sintaxis Básica y Salida</h1>";
echo "<p>Hola, mundo desde PHP!</p>";
echo "<p>La fecha y hora actuales son: " . date("Y-m-d H:i:s") . "</p>";

// 2. Variables
echo "<h2>2. Variables</h2>";
$nombre = "Juan";
$edad = 30;
$salario = 55000.75;
$esEstudiante = true;

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Edad: " . $edad . "</p>";
echo "<p>Salario: $" . $salario . "</p>";
echo "<p>Es estudiante: " . ($esEstudiante ? "Sí" : "No") . "</p>";

// 3. Tipos de Datos
echo "<h2>3. Tipos de Datos</h2>";
$cadena = "Esto es una cadena."; // String
$entero = 123; // Integer
$flotante = 123.45; // Float
$booleano = false; // Boolean
$arreglo = ["manzana", "peras", "uva"]; // Array
$nulo = null; // NULL

echo "<p>Cadena: " . $cadena . " (Tipo: " . gettype($cadena) . ")</p>";
echo "<p>Entero: " . $entero . " (Tipo: " . gettype($entero) . ")</p>";
echo "<p>Flotante: " . $flotante . " (Tipo: " . gettype($flotante) . ")</p>";
echo "<p>Booleano: " . ($booleano ? "Verdadero" : "Falso") . " (Tipo: " . gettype($booleano) . ")</p>";
echo "<p>Arreglo: " . implode(", ", $arreglo) . " (Tipo: " . gettype($arreglo) . ")</p>";
echo "<p>Nulo: " . ($nulo === null ? "Sí" : "No") . " (Tipo: " . gettype($nulo) . ")</p>";

// 4. Operadores
echo "<h2>4. Operadores</h2>";
$num1 = 10;
$num2 = 5;

echo "<h3>Operadores Aritméticos</h3>";
echo "<p>Suma: " . ($num1 + $num2) . "</p>";
echo "<p>Resta: " . ($num1 - $num2) . "</p>";
echo "<p>Multiplicación: " . ($num1 * $num2) . "</p>";
echo "<p>División: " . ($num1 / $num2) . "</p>";
echo "<p>Módulo: " . ($num1 % $num2) . "</p>";

echo "<h3>Operadores de Asignación</h3>";
$x = 10;
$x += 5; // $x = $x + 5
echo "<p>$x += 5: " . $x . "</p>";
$x = 10;
$x -= 3; // $x = $x - 3
echo "<p>$x -= 3: " . $x . "</p>";

echo "<h3>Operadores de Comparación</h3>";
echo "<p>10 == 5: " . (10 == 5 ? "Verdadero" : "Falso") . "</p>";
echo "<p>10 != 5: " . (10 != 5 ? "Verdadero" : "Falso") . "</p>";
echo "<p>10 > 5: " . (10 > 5 ? "Verdadero" : "Falso") . "</p>";
echo "<p>10 <= 5: " . (10 <= 5 ? "Verdadero" : "Falso") . "</p>";
echo "<p>10 === '10': " . (10 === '10' ? "Verdadero" : "Falso") . " (comparación estricta)</p>";

echo "<h3>Operadores Lógicos</h3>";
$cond1 = true;
$cond2 = false;
echo "<p>true AND false: " . ($cond1 && $cond2 ? "Verdadero" : "Falso") . "</p>";
echo "<p>true OR false: " . ($cond1 || $cond2 ? "Verdadero" : "Falso") . "</p>";
echo "<p>NOT true: " . (!$cond1 ? "Verdadero" : "Falso") . "</p>";

// 5. Sentencias Condicionales (If/Else, Else If, Switch)
echo "<h2>5. Sentencias Condicionales</h2>";
$puntuacion = 75;

echo "<h3>If/Else If/Else</h3>";
if ($puntuacion >= 90) {
    echo "<p>Calificación: A</p>";
} elseif ($puntuacion >= 80) {
    echo "<p>Calificación: B</p>";
} elseif ($puntuacion >= 70) {
    echo "<p>Calificación: C</p>";
} else {
    echo "<p>Calificación: F</p>";
}

echo "<h3>Switch</h3>";
$diaDeLaSemana = "Miércoles";
switch ($diaDeLaSemana) {
    case "Lunes":
        echo "<p>Hoy es el primer día laboral.</p>";
        break;
    case "Miércoles":
        echo "<p>Mitad de semana!</p>";
        break;
    case "Viernes":
        echo "<p>Casi fin de semana!</p>";
        break;
    default:
        echo "<p>Otro día de la semana.</p>";
        break;
}

// 6. Bucles (While, For, Foreach)
echo "<h2>6. Bucles</h2>";

echo "<h3>While Loop</h3>";
$i = 1;
while ($i <= 5) {
    echo "<p>Número (while): " . $i . "</p>";
    $i++;
}

echo "<h3>For Loop</h3>";
for ($j = 1; $j <= 5; $j++) {
    echo "<p>Número (for): " . $j . "</p>";
}

echo "<h3>Foreach Loop</h3>";
$colores = ["rojo", "verde", "azul"];
echo "<ul>";
foreach ($colores as $color) {
    echo "<li>Color: " . $color . "</li>";
}
echo "</ul>";

$persona = [
    "nombre" => "Ana",
    "edad" => 25,
    "ciudad" => "México"
];
echo "<h3>Foreach con Arrays Asociativos</h3>";
echo "<ul>";
foreach ($persona as $clave => $valor) {
    echo "<li>" . ucfirst($clave) . ": " . $valor . "</li>";
}
echo "</ul>";

// 7. Funciones
echo "<h2>7. Funciones</h2>";

// Función simple
function saludar($nombre) {
    return "Hola, " . $nombre . "!";
}
echo "<p>" . saludar("Carlos") . "</p>";

// Función con parámetros por defecto
function sumar($a, $b = 0) {
    return $a + $b;
}
echo "<p>Suma (10, 5): " . sumar(10, 5) . "</p>";
echo "<p>Suma (7): " . sumar(7) . "</p>";

// Función con número variable de argumentos (PHP 5.6+)
function calcularPromedio(...$numeros) {
    if (empty($numeros)) {
        return 0;
    }
    return array_sum($numeros) / count($numeros);
}
echo "<p>Promedio (1, 2, 3, 4, 5): " . calcularPromedio(1, 2, 3, 4, 5) . "</p>";
echo "<p>Promedio (10, 20): " . calcularPromedio(10, 20) . "</p>";

// Funciones anónimas (closures)
echo "<h3>Funciones Anónimas</h3>";
$multiplicador = function($num) {
    return $num * 2;
};
echo "<p>Multiplicar 5 por 2: " . $multiplicador(5) . "</p>";

// 8. Arrays
echo "<h2>8. Arrays</h2>";

echo "<h3>Arrays Indexados</h3>";
$frutas = ["manzana", "banana", "cereza"];
echo "<p>Primera fruta: " . $frutas[0] . "</p>";
$frutas[] = "dátil"; // Añadir al final
echo "<p>Todas las frutas: " . implode(", ", $frutas) . "</p>";
echo "<p>Número de frutas: " . count($frutas) . "</p>";

echo "<h3>Arrays Asociativos</h3>";
$estudiante = [
    "nombre" => "Sofía",
    "edad" => 22,
    "carrera" => "Ingeniería Informática"
];
echo "<p>Nombre del estudiante: " . $estudiante["nombre"] . "</p>";
$estudiante["ciudad"] = "Guadalajara"; // Añadir/Modificar
echo "<p>Datos del estudiante: ";
print_r($estudiante);
echo "</p>";

echo "<h3>Arrays Multidimensionales</h3>";
$matriculas = [
    ["curso" => "Matemáticas", "estudiantes" => 30],
    ["curso" => "Historia", "estudiantes" => 25],
    ["curso" => "Física", "estudiantes" => 28]
];
echo "<p>Estudiantes en Matemáticas: " . $matriculas[0]["estudiantes"] . "</p>";

// Funciones de array comunes
echo "<h3>Funciones de Array Comunes</h3>";
$numeros = [1, 5, 2, 8, 3];
sort($numeros); // Ordenar ascendente
echo "<p>Números ordenados: " . implode(", ", $numeros) . "</p>";
rsort($numeros); // Ordenar descendente
echo "<p>Números ordenados (desc): " . implode(", ", $numeros) . "</p>";

if (in_array("banana", $frutas)) {
    echo "<p>La banana está en el array de frutas.</p>";
}

$clavesEstudiante = array_keys($estudiante);
echo "<p>Claves del estudiante: " . implode(", ", $clavesEstudiante) . "</p>";

$valoresEstudiante = array_values($estudiante);
echo "<p>Valores del estudiante: " . implode(", ", $valoresEstudiante) . "</p>";

// 9. Formularios (Ejemplo Básico)
echo "<h2>9. Formularios (Ejemplo Básico)</h2>";

// Este bloque de código PHP procesaría el formulario si se envía.
// En un escenario real, este código estaría en un archivo separado o
// en la parte superior del mismo archivo que el HTML del formulario.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Datos del Formulario Recibidos:</h3>";
    $nombreForm = htmlspecialchars($_POST["nombreForm"]);
    $emailForm = htmlspecialchars($_POST["emailForm"]);
    echo "<p>Nombre: " . $nombreForm . "</p>";
    echo "<p>Email: " . $emailForm . "</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombreForm">Nombre:</label><br>
    <input type="text" id="nombreForm" name="nombreForm" required><br><br>
    <label for="emailForm">Email:</label><br>
    <input type="email" id="emailForm" name="emailForm" required><br><br>
    <input type="submit" value="Enviar Formulario">
</form>

<?php
// 10. Clases y Objetos (Programación Orientada a Objetos - OOP)
echo "<h2>10. Clases y Objetos (OOP)</h2>";

class Coche {
    // Propiedades
    public $marca;
    public $modelo;
    private $anio; // Propiedad privada

    // Constructor
    public function __construct($marca, $modelo, $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->setAnio($anio); // Usar el setter para validar
    }

    // Método
    public function obtenerInfo() {
        return "Este es un " . $this->marca . " " . $this->modelo . " del año " . $this->anio . ".";
    }

    // Setter para propiedad privada
    public function setAnio($anio) {
        if ($anio >= 1900 && $anio <= date("Y") + 1) { // Pequeña validación
            $this->anio = $anio;
        } else {
            $this->anio = 2000; // Valor por defecto o lanzar error
            echo "<p style='color:red;'>Año inválido. Establecido a 2000.</p>";
        }
    }

    // Getter para propiedad privada
    public function getAnio() {
        return $this->anio;
    }
}

// Crear un objeto (instancia de la clase)
$miCoche = new Coche("Toyota", "Corolla", 2020);
echo "<p>" . $miCoche->obtenerInfo() . "</p>";

$otroCoche = new Coche("Honda", "Civic", 2025);
echo "<p>" . $otroCoche->obtenerInfo() . "</p>";

// Intentar acceder a propiedad privada (causaría error si no fuera por métodos)
// echo $miCoche->anio; // Esto daría un error fatal si fuera estrictamente privado

echo "<p>Año de mi coche: " . $miCoche->getAnio() . "</p>";

// Herencia
echo "<h3>Herencia</h3>";
class CocheElectrico extends Coche {
    public $bateriaKwh;

    public function __construct($marca, $modelo, $anio, $bateriaKwh) {
        parent::__construct($marca, $modelo, $anio);
        $this->bateriaKwh = $bateriaKwh;
    }

    public function obtenerInfo() {
        return parent::obtenerInfo() . " Es eléctrico con una batería de " . $this->bateriaKwh . " kWh.";
    }
}

$tesla = new CocheElectrico("Tesla", "Model 3", 2023, 75);
echo "<p>" . $tesla->obtenerInfo() . "</p>";

// 11. Inclusión de Archivos (include, require)
echo "<h2>11. Inclusión de Archivos</h2>";

// Nota: No podemos "incluir" archivos que no existen en este ejemplo de un solo archivo.
// Pero la idea es que si tuviéramos, por ejemplo, un archivo 'header.php' y 'footer.php',
// los incluiríamos así:
// include 'header.php'; // Incluye el archivo, continúa si hay error
// require 'config.php'; // Incluye el archivo, detiene la ejecución si hay error

// Diferencia entre include y require
// include_once y require_once: Se asegura de que el archivo solo se incluya una vez.

echo "<p>En una aplicación real, usarías <code>include</code> o <code>require</code> para cargar archivos como:</p>";
echo "<ul>";
echo "<li>Archivos de configuración (config.php)</li>";
echo "<li>Funciones comunes (functions.php)</li>";
echo "<li>Clases (claseA.php, claseB.php)</li>";
echo "<li>Plantillas (header.php, footer.php)</li>";
echo "</ul>";

// 12. Sesiones
echo "<h2>12. Sesiones</h2>";

// Iniciar la sesión (siempre al principio del script antes de cualquier salida HTML)
session_start();

// Establecer una variable de sesión
$_SESSION["usuario"] = "admin";
$_SESSION["rol"] = "administrador";
$_SESSION["ultima_visita"] = date("Y-m-d H:i:s");

echo "<p>Usuario de la sesión: " . (isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "No establecido") . "</p>";
echo "<p>Última visita: " . (isset($_SESSION["ultima_visita"]) ? $_SESSION["ultima_visita"] : "No registrado") . "</p>";

// Modificar una variable de sesión
$_SESSION["usuario"] = "nuevo_admin";
echo "<p>Usuario de la sesión modificado: " . $_SESSION["usuario"] . "</p>";

// Eliminar una variable de sesión específica
// unset($_SESSION["rol"]);
// echo "<p>Rol después de unset: " . (isset($_SESSION["rol"]) ? $_SESSION["rol"] : "No existe") . "</p>";

// Destruir todas las variables de sesión y la sesión
// session_unset(); // Elimina todas las variables de la sesión actual
// session_destroy(); // Destruye la sesión por completo (borra el archivo de sesión)
// echo "<p>Después de destruir la sesión, el usuario es: " . (isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "No existe") . "</p>";

// 13. Manejo de Errores
echo "<h2>13. Manejo de Errores</h2>";

// Establecer un manejador de errores personalizado
function miManejadorDeErrores($errno, $errstr, $errfile, $errline) {
    echo "<p style='color: red;'><b>¡Error detectado!</b></p>";
    echo "<p>Tipo de error: [$errno] $errstr</p>";
    echo "<p>En el archivo: $errfile en la línea $errline</p>";
    // No detengas la ejecución para errores no fatales
    if ($errno === E_USER_ERROR || $errno === E_ERROR) {
        die("La ejecución del script ha sido detenida debido a un error fatal.");
    }
}
set_error_handler("miManejadorDeErrores");

// Generar un error de advertencia
trigger_error("Esto es un ejemplo de advertencia de usuario.", E_USER_WARNING);

// Generar un error de notificación
trigger_error("Esto es una notificación de usuario.", E_USER_NOTICE);

// Ejemplo de error que PHP detectaría (división por cero)
// $cero = 0;
// $resultado = 10 / $cero; // Esto generaría un error de división por cero

echo "<h3>Excepciones</h3>";
// Manejo de Excepciones
function dividir($num, $den) {
    if ($den == 0) {
        throw new Exception("No se puede dividir por cero.");
    }
    return $num / $den;
}

try {
    echo "<p>10 / 2 = " . dividir(10, 2) . "</p>";
    echo "<p>10 / 0 = " . dividir(10, 0) . "</p>"; // Esto lanzará la excepción
} catch (Exception $e) {
    echo "<p style='color: orange;'>Excepción capturada: " . $e->getMessage() . "</p>";
} finally {
    echo "<p>Bloque finally ejecutado, independientemente de si hubo excepción.</p>";
}

// 14. Trabajar con Archivos
echo "<h2>14. Trabajar con Archivos</h2>";

$nombreArchivo = "mi_archivo.txt";
$contenido = "Hola, este es un contenido de prueba.\n";
$contenido .= "Esta es la segunda línea.\n";

// Escribir en un archivo (sobrescribe si existe)
if (file_put_contents($nombreArchivo, $contenido) !== false) {
    echo "<p>Contenido escrito en '$nombreArchivo'.</p>";
} else {
    echo "<p style='color:red;'>Error al escribir en '$nombreArchivo'.</p>";
}

// Añadir a un archivo (sin sobrescribir)
$nuevoContenido = "Esta es una línea añadida.\n";
if (file_put_contents($nombreArchivo, $nuevoContenido, FILE_APPEND) !== false) {
    echo "<p>Contenido añadido a '$nombreArchivo'.</p>";
} else {
    echo "<p style='color:red;'>Error al añadir a '$nombreArchivo'.</p>";
}

// Leer de un archivo
if (file_exists($nombreArchivo)) {
    $lectura = file_get_contents($nombreArchivo);
    echo "<h3>Contenido de '$nombreArchivo':</h3>";
    echo "<pre>" . htmlspecialchars($lectura) . "</pre>";
} else {
    echo "<p style='color:red;'>El archivo '$nombreArchivo' no existe.</p>";
}

// Eliminar un archivo
// if (file_exists($nombreArchivo)) {
//     if (unlink($nombreArchivo)) {
//         echo "<p>El archivo '$nombreArchivo' ha sido eliminado.</p>";
//     } else {
//         echo "<p style='color:red;'>Error al eliminar el archivo '$nombreArchivo'.</p>";
//     }
// }

// 15. Base de Datos (PDO - PHP Data Objects)
echo "<h2>15. Base de Datos (PDO)</h2>";

// Nota: Para que este ejemplo funcione, necesitas tener un servidor de base de datos
// (como MySQL o SQLite) ejecutándose y una base de datos/tabla.
// Los detalles de conexión deben ser los tuyos.

$dsn = "mysql:host=localhost;dbname=test_db;charset=utf8mb4"; // O "sqlite:my_database.db"
$usuario_db = "root";
$contrasena_db = "";

try {
    $pdo = new PDO($dsn, $usuario_db, $contrasena_db);
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>Conexión a la base de datos exitosa (asumiendo que los datos de conexión son correctos).</p>";

    // Crear una tabla (si no existe)
    $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "<p>Tabla 'usuarios' creada o ya existente.</p>";

    // Insertar datos
    $nombre_nuevo = "Pedro";
    $email_nuevo = "pedro@example.com";
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)");
    $stmt->bindParam(':nombre', $nombre_nuevo);
    $stmt->bindParam(':email', $email_nuevo);
    if ($stmt->execute()) {
        echo "<p>Nuevo registro insertado con éxito (ID: " . $pdo->lastInsertId() . ").</p>";
    } else {
        echo "<p style='color:red;'>Error al insertar registro.</p>";
    }

    // Seleccionar datos
    echo "<h3>Usuarios en la Base de Datos:</h3>";
    $stmt = $pdo->query("SELECT id, nombre, email FROM usuarios");
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . " - Email: " . $row['email'] . "</li>";
    }
    echo "</ul>";

    // Actualizar datos
    $nuevo_email = "pedro_actualizado@example.com";
    $id_a_actualizar = $pdo->lastInsertId(); // O un ID existente
    $stmt = $pdo->prepare("UPDATE usuarios SET email = :email WHERE id = :id");
    $stmt->bindParam(':email', $nuevo_email);
    $stmt->bindParam(':id', $id_a_actualizar);
    if ($stmt->execute()) {
        echo "<p>Registro actualizado con éxito (ID: " . $id_a_actualizar . ").</p>";
    } else {
        echo "<p style='color:red;'>Error al actualizar registro.</p>";
    }

    // Eliminar datos (¡Cuidado con esto en producción!)
    // $id_a_eliminar = 1; // ID del usuario a eliminar
    // $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");
    // $stmt->bindParam(':id', $id_a_eliminar);
    // if ($stmt->execute()) {
    //     echo "<p>Registro eliminado con éxito (ID: " . $id_a_eliminar . ").</p>";
    // } else {
    //     echo "<p style='color:red;'>Error al eliminar registro.</p>";
    // }

} catch (PDOException $e) {
    echo "<p style='color:red;'>Error de conexión a la base de datos: " . $e->getMessage() . "</p>";
    // En un entorno de producción, registrar el error en un archivo de log
}

// 16. Cookies
echo "<h2>16. Cookies</h2>";

// Establecer una cookie (nombre, valor, tiempo de expiración)
$nombre_cookie = "preferencia_idioma";
$valor_cookie = "es";
$expiracion = time() + (86400 * 30); // 30 días
setcookie($nombre_cookie, $valor_cookie, $expiracion, "/"); // La cookie estará disponible en todo el sitio

if (isset($_COOKIE[$nombre_cookie])) {
    echo "<p>Valor de la cookie '$nombre_cookie': " . $_COOKIE[$nombre_cookie] . "</p>";
} else {
    echo "<p>La cookie '$nombre_cookie' no está establecida o aún no es visible en esta carga de página.</p>";
}

// Modificar una cookie
setcookie($nombre_cookie, "en", time() + (86400 * 7), "/"); // Cambiar a 'en' y 7 días

// Eliminar una cookie (establecer tiempo de expiración en el pasado)
// setcookie($nombre_cookie, "", time() - 3600, "/");
// echo "<p>Cookie '$nombre_cookie' eliminada (o en proceso de eliminación).</p>";

?>
