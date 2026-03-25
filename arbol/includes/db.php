
<?php
$host = "sql101.infinityfree.com"; // Ej: sql123.infinityfree.com
$user = "if0_41463102";  // Ej: if0_38456789
$pass = "41t2FsNK5dOJT"; // Tu contraseña de InfinityFree
$db   = "if0_41463102_arboldb"; // El nombre completo que creó el panel

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Para que las eñes y acentos se vean bien
mysqli_set_charset($conexion, "utf8");
?>