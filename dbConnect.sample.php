<?php 
    $serverName = "localhost";
    $username = "root";
    $password= "";
    $dbName = "carodky2019";

    $conn = new mysqli($serverName,$username,$password,$dbName); 
    if($conn->connect_error){
        die($conn->connect_error); }
    $conn -> set_charset("UTF8") or die("Spatne kodovani!");

?>
