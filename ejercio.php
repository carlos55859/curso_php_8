<?php
$base = 2;
$exp = 5;

$resultado = 1;

$i = 1;

while ($i <= $exp ) {
    $resultado = $resultado * $base;
    $i++;
}
echo "El valor de $base elebado a lo que tega $exp es $resultado";