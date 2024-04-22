<?php
//funcion para mostrar un de array
// $array = [1, 2, 3];
// list($a, $b, $c) = $array;
// echo $a;

//funcion para mostrar un rango de array
//$array = range(10, 20);
//var_dump($array);
//echo $array[5];

$array = ['chet', 'maye', 'milla', 'javier', 'carlos'];
//funcion para borrar un elemento del array
unset($array[2]);
//funcion para llamar un elemento del array
if (in_array('milla',$array)) {
    echo 'El nombre si se encuentra en el array';
}else{
    echo 'El nombre no se encuentra en el array';

}

?>