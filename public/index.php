<?php
require("../includes/constants.php");
require("../includes/functions.php");


if(isset($_GET['q']))
{
    $computadoras=query("SELECT * FROM computadoras where nombre LIKE ?",'%'. $_GET['q'].'%');   
}else{
    $computadoras=query("SELECT * FROM computadoras");
}
require("../templates/header.php");
require("../templates/index.php");


?>


