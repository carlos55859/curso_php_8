<?php
$a = 9;

echo match ($a) {
    1  => "Lunes <br>",
    2  => "Martes <br>",
    3  => "Miercoles <br>",
    4  => "Jueves <br>",
    5  => "Viernes <br>",
    6  => "Sabado <br>",
    7  => "Domingo <br>",
    default => "El valor no es correcto"
};
