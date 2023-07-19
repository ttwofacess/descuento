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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header><h1>Superstore</h1></header>
    <main>
        <form action="#" method="POST">
        <div id="contPics">
            <div class="pics">
                <label for="img1">Reverse T-shirt</label>
                <img src="img/rem-removebg-preview.png" alt="t-shirt" id="img1"><br />
            </div>

            <div class="pics">
                <label for="img2">Aesthetic Suglasses</label>
                <img src="img/sha-removebg-preview.png" alt="shades" id="img2">
            </div>

            <div class="pics">
                <label for="img3">Sneakers</label>
                <img src="img/zap-removebg-preview.png" alt="sneakers" id="img3">
            </div>
        </div>

        <div class="ingPrecio">
            <label for="prc1" class="lblPrc">Ingrese precio</label>
            <input type="number" class="inpPrc" name="prc1" id="prc1">

            <label for="prc2" class="lblPrc">Ingrese precio</label>
            <input type="number" class="inpPrc" name="prc2" id="prc2">

            <label for="prc3" class="lblPrc">Ingrese precio</label>
            <input type="number" class="inpPrc" name="prc3" id="prc3">
        </div>

            <div>
                <label for="dsct1">Descuento aplicado</label>    
                <input type="text" name="dsct1">

                <label for="dsct2">Descuento aplicado</label>
                <input type="text" name="dsct2">

                <label for="dsct3">Descuento aplicado</label>
                <input type="text" name="dsct3">
            </div>

            <input type="submit" value="Consultar">
        </form>
    </main>
</body>
</html>