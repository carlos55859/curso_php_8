<?php

$datos = [
    [
        'nombre' => 'Javier Lopez Ortiz',
        'telefono' => '3223980756',
        'correo' => 'cjlopezortiz1991@gmail.com',
        'ciudad' => 'Cucuta',
        'direccion' => [
            'pais' => 'Colombia',
            'ciudad' => 'Cucuta',
            'barrio' => 'Motilones',
            'calles' => [
                'calle' => '29#529_buenos aires'
            ],
        ],
       
    ],
    [
        'nombre' => 'Rigoverto Lopez Ortiz',
        'telefono' => '3223980756',
        'correo' => 'cjlopezortiz1991@gmail.com',
        'ciudad' => 'Ocaña'
    ],
    [
        'nombre' => 'Ana dolores Lopez Ortiz',
        'telefono' => '3223980756',
        'correo' => 'cjlopezortiz1991@gmail.com',
        'ciudad' => 'Medellin'
    ]
];

foreach ($datos as $item) {
    echo $item['nombre'].'<br>';
    echo $item['telefono'].'<br>';
    echo $item['correo'].'<br>';
    echo $item['ciudad'].'<br>';
    if (isset($item['direccion'])) {
        echo $item['direccion']['barrio'].'<br>';
        if (isset($item['direccion']['calles']['calle'])) {
            echo $item['direccion']['calles']['calle'].'<br>';
        } else {
            echo "Dirección no especificada.<br>";
        }
    } else {
        echo "Dirección no especificada.<br>";
    }
    echo "<br>";
}
//echo $datos[0]['direccion']['calles']['calle'];

?>

