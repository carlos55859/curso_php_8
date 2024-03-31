<?php
function factorial($n){
    $resultado = 1;

for ($i=1; $i <= $n; $i++) { 
   $resultado = $resultado * $i;
}
return $resultado;
// echo "El factoria de  $n es: $resultado";
}
$resultado = factorial(6);
echo "El factoria de 6 es: $resultado";