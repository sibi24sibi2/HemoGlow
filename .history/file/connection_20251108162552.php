<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env if exists
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    echo "Loaded .env file\n";
} else {
    echo ".env file not found in " . __DIR__ . "\n";
}

// Debug values
var_dump($_ENV);

// Use .env if available, otherwise fallback to local defaults
$host     = $_ENV['MYSQL_ADDON_HOST'] ?? 'localhost';
$user     = $_ENV['MYSQL_ADDON_USER'] ?? 'root';
$password = $_ENV['MYSQL_ADDON_PASSWORD'] ?? '';
$dbname   = $_ENV['MYSQL_ADDON_DB'] ?? 'bloodbank';
$port     = $_ENV['MYSQL_ADDON_PORT'] ?? 3306;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully with host: $host, user: $user, db: $dbname";
