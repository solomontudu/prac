<?php

$host = 'localhost';
$user_ac = 'root';
$pass = '';
$db = 'dhorom_seren';

$con = mysqli_connect($host,$user_ac,$pass);
$select = mysqli_select_db($con,$db);

?>