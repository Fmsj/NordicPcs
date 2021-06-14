<?php
require("../includes/constants.php");
require("../includes/functions.php");

$compu=query("SELECT * FROM computadoras where id=?",$_GET['id'])[0];

require("../templates/header.php");
require("../templates/foreditar.php");
?>


