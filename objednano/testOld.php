<?php 
include "dbconnect.php";
$vzkaz = "Ahoj svete!";
/* 
$sql = "INSERT INTO zpetna_vazba(vzkaz_zpetne_vazby) VALUES('$vzkaz')"; 
if($conn->query($sql)===TRUE){
echo "inserted data";
}else{
echo "failed";
} 
$conn->close(); 
*/

function dbWrite($conn, $vzkaz="Nezadano"){
$sql = "INSERT INTO zpetna_vazba(vzkaz_zpetne_vazby) VALUES('$vzkaz')"; 
if($conn->query($sql)===TRUE){
echo "inserted data";
}else{
echo "failed";
} }
dbWrite($conn, $vzkaz);
$conn->close(); 
?>  