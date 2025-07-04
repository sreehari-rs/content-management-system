<?php
$dbhost = "localhost";
$dbuser ="root";
$dbpass = "";
$dbname = "cms";
 
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    echo ("something went wrong ".mysqli_connect_error());

}

?>