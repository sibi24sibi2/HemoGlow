<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env from parent directory (project root)
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();


$host     = $_ENV['MYSQL_ADDON_HOST'];
$user     = $_ENV['MYSQL_ADDON_USER'];
$password = $_ENV['MYSQL_ADDON_PASSWORD'];
$dbname   = $_ENV['MYSQL_ADDON_DB'];
$port     = $_ENV['MYSQL_ADDON_PORT'] ?? 3306;

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
