<?php
$port = 1433;
$serverName = "tcp:pruebaexamen.database.windows.net," . $port;
$database = "pruebaexam";
$userName = "elexam";
$password = "Exam12345";

try {
    $conn = new PDO("sqlsrv:server = $serverName,$port; Database = $database", $userName, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
