<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully. <br/> ";


/*// Create database
$sql = "CREATE DATABASE carodkyObjednano";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
    }*//*
$db_selected = mysql_select_db("carodky2018", $conn);
$vzkaz = "AHOJ SVETE!";
// Create database
$sql = "SELECT DB `carodky2018` 
INSERT INTO `zpetna_vazba`(`vzkaz_zpetne_vazby`) VALUES(`" . $vzkaz ." `);";
if ($conn->query($sql) === TRUE) {
    echo "Insert into database successfully";
} else {
    echo "Error inserting into database: " . $conn->error;
    }
    
    $conn->close();  */
    
    $db_selected = mysql_select_db("carodky2018", $conn);
$vzkaz = "AHOJ SVETE!";
// Create database
$sql = "SELECT DB `carodky2018` 
INSERT INTO `zpetna_vazba`(`vzkaz_zpetne_vazby`) VALUES(`" . $vzkaz ." `);";
if ($conn->query($sql) === TRUE) {
    echo "Insert into database successfully";
} else {
    echo "Error inserting into database: " . $conn->error;
    }
    
    $conn->close();
?>