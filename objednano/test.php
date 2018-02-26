<?php 
include "dbconnect.php";
$vzkaz = "žřščžčřžčAhoj svete!";
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
  $sql = "SET NAMES utf8";
  if($conn->query($sql)===TRUE){
      echo "utf8 OK<br/>";
  }else{
      echo "utf8 NOK<br/>";
  } 
  $sql = "INSERT INTO zpetna_vazba(vzkaz_zpetne_vazby) VALUES('$vzkaz')"; 
  if($conn->query($sql)===TRUE){
      echo "inserted data<br/>";
  }else{
      echo "failed<br/>";
  } }

dbWrite($conn, $vzkaz);
$conn->close(); 
?>  