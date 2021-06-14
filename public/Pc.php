<?php

require("../includes/constants.php");
require("../includes/functions.php");

$y=query("SELECT * FROM computadoras where id=?",$_GET['j'])[0]; 

require("../templates/header.php");
require("../templates/Pc.php");
?>
