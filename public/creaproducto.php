<?php
require("../includes/constants.php");
require("../includes/functions.php");

$nombre=$_POST["nombre"];

$precio=$_POST["precio"];

$procesador=$_POST["procesador"];

$ram=$_POST["ram"];

$stock=$_POST["stock"];

$imagen=$_POST["imagen"];


$inserccion=query("INSERT INTO `computadoras` (`id`, `nombre`, `precio`, `procesador`, `ram`, `stock`, `imagen`) VALUES (NULL, ?, ?, ?, ?, ?, ?)",$nombre,$precio,$procesador,$ram,$stock,$imagen);
var_dump($inserccion);

redirect();
?>


