<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "Recetario";


/*
$host = "db-mysql-nyc1-70273-do-user-8298579-0.b.db.ondigitalocean.com";
$user = "doadmin";
$pass = "AVNS_bjyOCv0beJKSKqBBACt";
$db = "Recetario";*/
$con= new mysqli($host,$user,$pass,$db)or die("problemas al conectar");
?>
