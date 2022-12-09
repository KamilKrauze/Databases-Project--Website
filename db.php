<?php
$host = "silva.computing.dundee.ac.uk";
$username = "22ac3u06";
$password = "abc123";
$database = "22ac3d06";

// $mysql = new PDO("mysql:host=".$host.";dbname=".$database,$username,$password);

$mysql = mysqli_connect($host, $username, $password, $database);

if($mysql === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
