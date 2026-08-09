<?php

$host = "sql105.ezyro.com";
$username = "ezyro_42608524";
$password = "7ad3b18f25c5";
$database = "ezyro_42608524_sarahsmartmethods";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

?>