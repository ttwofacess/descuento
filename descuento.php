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
    <header>
        <h1>Superstore</h1>
        <nav>
            <a href="#art1">T-shirts</a>
            <a href="#art2">Sunglasses</a>
            <a href="#art3">Sneakers</a>
        </nav>
    </header>
    <main>
        <form action="exec.php" method="POST"><br />
        <article id="art1" class="card">
            <figure>
                <img src="img/rem-using.png" alt="t-shirt" width="200" height="200">
                <figcaption>Reverse T-shirt</figcaption>
            </figure>
            <label class="lblPrc" id="ingPrecio_lblitem1" for="prc1">Ingresar precio de venta</label>
            <?php 
            $inputPrc1 = '<input class="inpPrc" id="prc1" type="number" name="prc1" value=';
            $inputPrc1 .= "$_SESSION[prc1]";
            $inputPrc1 .= '>';
            echo $inputPrc1; 
            ?> 
            <label class="lblPrc" id="ingDsct_lblitem1" for="dsct1">Con 35% de desc.</label>    
            <?php 
            $inputDsct1 = '<input class="inpPrc" id="dsct1" type="text" name="dsct1" value=';
            $inputDsct1 .= "$_SESSION[dsct1]";
            $inputDsct1 .= '>'; 
            echo $inputDsct1;
            ?>
        </article>

        <article id="art2" class="card">
            <figure>
                <img src="img/sha-using.png" alt="shades" width="200" height="200">
                <figcaption>Aesthetic Suglasses</figcaption>
            </figure>
            <label class="lblPrc" id="ingPrecio_lblitem2" for="prc2">Ingresar precio de venta</label>
            <?php 
            $inputPrc2 = '<input class="inpPrc" id="prc2" type="number" name="prc2" value=';
            $inputPrc2 .= "$_SESSION[prc2]"; 
            $inputPrc2 .= '>';
            echo $inputPrc2;
            ?>
            <label class="lblPrc" id="ingDsct_lblitem2" for="dsct2">Con 35% de desc.</label>
            <?php 
            $inputDsct2 = '<input class="inpPrc" id="dsct2" type="text" name="dsct2" value=';
            $inputDsct2 .= "$_SESSION[dsct2]"; 
            $inputDsct2 .= '>';
            echo $inputDsct2;
            ?> 
        </article>

        <article id="art3" class="card">
            <figure>
            <img src="img/zap-using.png" alt="sneakers" width="200" height="200">
            <figcaption>Sneakers</figcaption>
            </figure>
            <label class="lblPrc" id="ingPrecio_lblitem3" for="prc3">Ingrese precio</label>
            <?php 
            $inputPrc3 = '<input class="inpPrc" id="prc3" type="number"  name="prc3" value=';
            $inputPrc3 .= "$_SESSION[prc3]";
            $inputPrc3 .= '>'; 
            echo $inputPrc3
            ?>
            <label class="lblPrc" id="ingDsct_lblitem3" for="dsct3">Con 35% de desc.</label>
            <?php 
            $inputDsct3 = '<input class="inpPrc" id="dsct3" type="text" name="dsct3" value=';
            $inputDsct3 .= "$_SESSION[dsct3]";
            $inputDsct3 .= '>';
            echo $inputDsct3; 
            ?> 
        </article>

        <input type="submit" value="Consultar"><br />
        </form>
    </main>
    <footer><p>by azazel</p></footer>
</body>
</html> 