<?php

session_start();

$_SESSION["prc1"] = $_REQUEST["prc1"];
$_SESSION["dsct1"] = $_REQUEST["prc1"] - ($_REQUEST["prc1"] * 0.35);

header("Location: descuento.php");

?>