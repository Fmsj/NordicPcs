<?php
require("../includes/constants.php");
require("../includes/functions.php");

$eliminar=query("DELETE FROM `computadoras` WHERE `computadoras`.`id` = ?",$_GET["id"]);
var_dump($eliminar);

//Modificar el nombre de tu tabla
redirect();
?>



