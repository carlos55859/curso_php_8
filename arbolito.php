<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbolito</title>
    <link rel="stylesheet" href="./css/stylos.css">
</head>
<h1>hola arbolito mas</h1>
<h1>hola arbolito mas</h1>
<h1>hola arbolito mas</h1>
<body>
    <div id="container">

        <?php
        $filas = 20;
        ?>
        <div id="arbol_1">
            <div id="greenStars">
                <?php
                for ($i = 1; $i < $filas; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "<span style='color: green;'>*</span>";
                    }
                    echo "<br>";
                }
                ?>
            </div>
            <div id="blueStarsRight">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo "<span style='color: blue;'>*</span><br>";
                }
                ?>
            </div>

            <div id="blueStarsLeft">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo "<span style='color: blue;'>*</span><br>";
                }
                ?>
            </div>
            <div id="redStars">
                <?php
                for ($i = 0; $i < 40; $i++) {
                    echo "<span style='color: red;'>*</span>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>