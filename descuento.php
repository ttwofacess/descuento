<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descuentos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
    <div>
        <div class="pics">
            <label for="img1">Reverse T-shirt</label>
            <img src="img/rem.jpeg" alt="t-shirt" id="img1"><br />
        </div>

        <div class="pics">
            <label for="img2">Aesthetic Suglasses</label>
            <img src="img/sha.jpeg" alt="shades" id="img2">
        </div>

        <div class="pics">
            <label for="img3">Sneakers</label>
            <img src="img/zap.jpeg" alt="sneakers" id="img3">
        </div>
    </div>
        <label for="prc1">Ingrese precio</label>
        <input type="number" name="prc1" id="prc1">

        <label for="prc2">Ingrese precio</label>
        <input type="number" name="prc2" id="prc2">

        <label for="prc3">Ingrese precio</label>
        <input type="number" name="prc2" id="prc2">

        <div>
            <input type="text" name="dsct1">
            <label for="dsct1">Descuento aplicado</label>

            <input type="text" name="dsct2">
            <label for="dsct2">Descuento aplicado</label>

            <input type="text" name="dsct3">
            <label for="dsct3">Descuento aplicado</label>
        </div>

        <input type="submit" value="Consultar">
    </form>
</body>
</html>