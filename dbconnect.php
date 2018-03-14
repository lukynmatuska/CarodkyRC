<?php 
$servername = "localhost";
$username = "username";
$password= "password";
$dbname = "carodky2018";
$vzkaz = "Ahoj svete!"; 

$conn = new mysqli($servername,$username,$password,$dbname); 
if($conn->connect_error){
    die($conn->connect_error); }
$conn -> set_charset("UTF8") or die("Spatne kodovani!");

?>