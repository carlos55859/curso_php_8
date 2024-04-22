<?php
$nombre = $_REQUEST['name'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$imagen = $_FILES['imagen'];
// Directorio de destino
$patch = $_SERVER['DOCUMENT_ROOT'] . '/curso_php_8/images' . '/' . $imagen['name'];

echo '<br>El nombre del usuario es: ' . $nombre . '<br>';
echo '<br>La edad del usuario es: ' . $edad . '<br>';
echo '<br>El sexo del usuario es: ' . $sexo . '<br>';
echo "<p>Roles:</p>";
echo "<ul>";
foreach ($roles as $rol) {
    echo "<li>$rol</li>";
}
echo "</ul>";
var_dump($imagen);
// Mover el archivo de imagen al directorio de destino
if (move_uploaded_file($imagen['tmp_name'], $patch)) {
    echo "¡La imagen se ha subido correctamente!";
} else {
    echo "Error al subir la imagen.";
}


?>