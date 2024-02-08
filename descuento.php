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
        <div class='divsGralCfg'>
            <div class='pics divsGralCfg'>
                <label class='lblimg' id='lblimg1' for='img1'>Reverse T-shirt</label>
                <img id='img1' src='img/rem-using.png' alt='t-shirt'><br />
            </div>

            <div class='pics divsGralCfg'>
                <label class='lblimg' id='lblimg2' for='img2'>Aesthetic Suglasses</label>
                <img id='img2' src='img/sha-using.png' alt='shades'>
            </div>

            <div class='pics divsGralCfg'>
                <label class='lblimg' for='img3'>Sneakers</label>
                <img id='img3' src='img/zap-using.png' alt='sneakers'>
            </div>
        </div>

        <div class='divsGralCfg nopics'>
            <label class='lblPrc' id='ingPrecio_lblitem1' for='prc1' >Ingrese precio</label>
            <input class='inpPrc' id='prc1' type='number' name='prc1' value='".$_SESSION['prc1']."'>

            <label class='lblPrc' id='ingPrecio_lblitem2' for='prc2'>Ingrese precio</label>
            <input class='inpPrc' id='prc2' type='number' name='prc2' value='".$_SESSION['prc2']."'>

            <label class='lblPrc' id='ingPrecio_lblitem3' for='prc3'>Ingrese precio</label>
            <input class='inpPrc' id='prc3' type='number'  name='prc3' value='".$_SESSION['prc3']."'>
        </div>

        <div class='divsGralCfg ingDsct'>
            <label class='lblPrc' id='ingDsct_lblitem1' for='dsct1'>Descuento aplicado</label>    
            <input class='inpPrc' id='dsct1' type='text' name='dsct1' value='".$_SESSION['dsct1']."'>

            <label class='lblPrc' id='ingDsct_lblitem2' for='dsct2'>Descuento aplicado</label>
            <input class='inpPrc' id='dsct2' type='text' name='dsct2' value='".$_SESSION['dsct2']."' >

            <label class='lblPrc' id='ingDsct_lblitem3' for='dsct3'>Descuento aplicado</label>
            <input class='inpPrc' id='dsct3' type='text' name='dsct3' value='".$_SESSION['dsct3']."' >
        </div>

        <input type='submit' value='Consultar'><br />
        </form>
    </main>
    <footer><p>by azazel</p></footer>
</body>
</html> ";

?>