<?php

session_start();

$_SESSION["prc1"] = $_REQUEST["prc1"];
$_SESSION["prc2"] = $_REQUEST["prc2"];
$_SESSION["prc3"] = $_REQUEST["prc3"];

$_SESSION["dsct1"] = $_REQUEST["prc1"] - ($_REQUEST["prc1"] * 0.35);
$_SESSION["dsct2"] = $_REQUEST["prc2"] - ($_REQUEST["prc2"] * 0.35);
$_SESSION["dsct3"] = $_REQUEST["prc3"] - ($_REQUEST["prc3"] * 0.35);

header("Location: descuento.php");

?>