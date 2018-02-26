<?php 
$servername = "localhost";
$username = "carodky";
$password= "VKGSXcKmO7vpZL5O";
$dbname = "carodky";
$vzkaz = "Ahoj svete!"; 

$conn = new mysqli($servername,$username,$password,$dbname); 
if($conn->connect_error){
    die($conn->connect_error); }
?>