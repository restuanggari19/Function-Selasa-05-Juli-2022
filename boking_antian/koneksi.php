<?php

$host="localhost";
$user="root";
$password="";
$db="db_boking";

$kon =
mysqli_connect($host,$user,$password);

$hasil=mysqli_select_db($kon, $db);

?>