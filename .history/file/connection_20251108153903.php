<?php
$servername = "b7qhimpabqtgwt5jr8dk-mysql.services.clever-cloud.com";
$username = "root";
$password = "";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql:' . mysql_error());
}
