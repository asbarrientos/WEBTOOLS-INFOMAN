<?php

$conn = new mysqli('localhost', 'root', '', 'Group_6_wd201');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>