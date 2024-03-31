<?php
define('CURSO','Este es un cuso de PHP 8');
echo CURSO;
echo "<br/>";
define('usuario_1','Carlos javier lopez ortiz');
echo usuario_1;
echo "<br/>";
define('ANIMALES', [
'Perro',
'Gato',
'Loro',
'Abeja'
]);

echo ANIMALES[0];
echo "<br/>";
if (defined('CURSO')) {
    echo "SI SE UTILIZO ESTA VARIABLE";
}
echo "<br/>";
echo 'Mi vercion de php 8 es'. PHP_VERSION;
echo "<br/>";
echo 'Mi Sistema  operativo  es'. PHP_OS;
echo "<br/>";
echo __FILE__;
?>
