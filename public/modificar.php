<?php
 require("../includes/constants.php");
 require("../includes/functions.php");
 
 $nombre=$_POST["nombre"];

 $precio=$_POST["precio"];
 
 $procesador=$_POST["procesador"];
 
 $ram=$_POST["ram"];
 
 $stock=$_POST["stock"];
 
 $imagen=$_POST["imagen"];
 
 
 $editar=query("UPDATE `computadoras` SET `nombre` = ?, `precio` = ?, `procesador` = ?, `ram` = ?, `stock` = ?, `imagen` = ? WHERE `computadoras`.`id` = ?",$nombre,$precio,$procesador,$ram,$stock,$imagen,$_GET['id']);
 var_dump($editar);
 
 redirect();

?>


