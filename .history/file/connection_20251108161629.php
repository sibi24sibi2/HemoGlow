<?php
require __DIR__ . './';

use Dotenv\Dotenv;

// Load .env only if running locally (optional)
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

$host     = $_ENV['MYSQL_ADDON_HOST'];
$user     = $_ENV['MYSQL_ADDON_USER'];
$password = $_ENV['MYSQL_ADDON_PASSWORD'];
$dbname   = $_ENV['MYSQL_ADDON_DB'];
$port     = $_ENV['MYSQL_ADDON_PORT'] ?? 3306; // default port if missing

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: confirm
// echo "Connected successfully!";
