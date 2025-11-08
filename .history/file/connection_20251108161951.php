<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

// Use getenv() as fallback
$host     = getenv('MYSQL_ADDON_HOST') ?: 'localhost';
$user     = getenv('MYSQL_ADDON_USER') ?: 'root';
$password = getenv('MYSQL_ADDON_PASSWORD') ?: '';
$dbname   = getenv('MYSQL_ADDON_DB') ?: 'blood_bank';
$port     = getenv('MYSQL_ADDON_PORT') ?: 3306;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully!";
