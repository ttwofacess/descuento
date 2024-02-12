<?php

session_start();

echo " 
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Descuentos</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap' rel='stylesheet'>
</head>
<body>
    <header>
        <h1>Superstore</h1>
        <nav>
            <a href='#art1'>T-shirts</a>
            <a href='#art2'>Sunglasses</a>
            <a href='#art3'>Sneakers</a>
        </nav>
    </header>
    <main>
        <form action='exec.php' method='POST'><br />
        <article id='art1' class='card'>
            <figure>
                <img src='img/rem-using.png' alt='t-shirt' width='200' height='200'>
                <figcaption>Reverse T-shirt</figcaption>
            </figure>
            <label class='lblPrc' id='ingPrecio_lblitem1' for='prc1'>Ingresar precio de venta</label>
            <input class='inpPrc' id='prc1' type='number' name='prc1' value='".$_SESSION['prc1']."'>
            <label class='lblPrc' id='ingDsct_lblitem1' for='dsct1'>Con 35% de desc.</label>    
            <input class='inpPrc' id='dsct1' type='text' name='dsct1' value='".$_SESSION['dsct1']."'>
        </article>

        <article id='art2' class='card'>
            <figure>
                <img src='img/sha-using.png' alt='shades' width='200' height='200'>
                <figcaption>Aesthetic Suglasses</figcaption>
            </figure>
            <label class='lblPrc' id='ingPrecio_lblitem2' for='prc2'>Ingresar precio de venta</label>
            <input class='inpPrc' id='prc2' type='number' name='prc2' value='".$_SESSION['prc2']."'>
            <label class='lblPrc' id='ingDsct_lblitem2' for='dsct2'>Descuento aplicado</label>
            <input class='inpPrc' id='dsct2' type='text' name='dsct2' value='".$_SESSION['dsct2']."' >
        </article>

        <article>
            <figure>
            <img src='img/zap-using.png' alt='sneakers' width='200' height='200'>
            <figcaption>Sneakers</figcaption>
            </figure>
            <label class='lblPrc' id='ingPrecio_lblitem3' for='prc3'>Ingrese precio</label>
            <input class='inpPrc' id='prc3' type='number'  name='prc3' value='".$_SESSION['prc3']."'>
            <label class='lblPrc' id='ingDsct_lblitem3' for='dsct3'>Descuento aplicado</label>
            <input class='inpPrc' id='dsct3' type='text' name='dsct3' value='".$_SESSION['dsct3']."' >
        </article>

        <input type='submit' value='Consultar'><br />
        </form>
    </main>
    <footer><p>by azazel</p></footer>
</body>
</html> ";

?>