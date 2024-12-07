<?php 

$hostname = "localhost";
$user = "root";
$password = "";
$databasename ="practice";


$conn = mysqli_connect($hostname, $user, $password, $databasename);
if(!$conn){
    die("could not connect to the database");
}

?>