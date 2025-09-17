<?php
session_start();

$conn = new mysqli("localhost", "root", "", "simple_shop");

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
