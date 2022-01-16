<?php

$dbhost = "localhost";
$dbusuario = "root";
$dbsenha = "";
$dbnome = "primeirols";

if(!$con = mysqli_connect($dbhost,$dbusuario,$dbsenha,$dbnome))
{

	die("failed to connect!");
}
