<?php
$servername = "localhost";
$username = "root";
$password = "amardeep";
$dbname="ebay_orders";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
