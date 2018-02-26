<?php
include "dbconnect.php";

$vzkaz = "AHOJ SVETE!";

// Some Query
$sql 	= 'SELECT * FROM carodky2018';
$query 	= mysqli_query($con, $sql);
//echo $query;
//echo $sql;
echo mysqli_fetch_array($query, MYSQLI_ASSOC);
//echo mysqli_fetch_array($query);
/*while ($row = mysqli_fetch_array($query))
{
	echo $row['id'];
	//echo $row['id_vzkazu'];
}*/              

// Close connection
mysqli_close ($con);
?>