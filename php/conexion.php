<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "Recetario";


/*
$host = "db-mysql-tor1-92654-do-user-8298579-0.b.db.ondigitalocean.com";
$user = "doadmin";
$pass = "AVNS_5bhkqW2MIiRPMB-RORT";
$db = "Recetario";*/
$con= new mysqli($host,$user,$pass,$db)or die("problemas al conectar");
?>
