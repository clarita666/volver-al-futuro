<?php
require_once "utils/db_connection.php";

echo "<h2>Verificando tablas en la base de datos:</h2>";

// Mostrar todas las tablas
$result = $conn->query("SHOW TABLES");
if ($result) {
    echo "<h3>Tablas existentes:</h3><ul>";
    while ($row = $result->fetch_array()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Error al obtener tablas: " . $conn->error;
}

// Verificar estructura de cada tabla común
$tablas_esperadas = ['personajes', 'peliculas', 'vehiculos', 'linea_tiempo'];

foreach ($tablas_esperadas as $tabla) {
    echo "<h3>Estructura de tabla '$tabla':</h3>";
    $result = $conn->query("DESCRIBE $tabla");
    if ($result) {
        echo "<table border='1'><tr><th>Campo</th><th>Tipo</th><th>Null</th><th>Key</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['Field']}</td><td>{$row['Type']}</td><td>{$row['Null']}</td><td>{$row['Key']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Tabla '$tabla' no existe o error: " . $conn->error . "<br>";
    }
}
?>