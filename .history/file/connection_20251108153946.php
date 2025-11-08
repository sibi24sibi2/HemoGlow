<?php
$servername = "b7qhimpabqtgwt5jr8dk-mysql.services.clever-cloud.com";
$username = "umexmuin68rw3b3x";
$password = "HEwQeRI0Qx0MQGvrUTXM";
$dbname = "b7qhimpabqtgwt5jr8dk";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql:' . mysql_error());
}
