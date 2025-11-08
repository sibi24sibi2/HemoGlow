<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "b7qhimpabqtgwt5jr8dk-mysql.services.clever-cloud.com";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql:' . mysql_error());
}
