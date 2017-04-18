<?php
# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
const DB_HOST = 'ap-cdbr-azure-east-c.cloudapp.net';
const DB_USER = 'b70bf26a0e51fe';
const DB_PASS = '408b52f1';
const DB_NAME = 'acsm_581c9d4a8ca6f21';


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

# check connection
if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from admin WHERE username LIKE '{$username}' AND password  LIKE '{$password}' LIMIT 1";
$result = $mysqli->query($sql);
if (!$result->num_rows == 1) {
    echo "<p>Invalid login credentials</p>";
} else {
    echo "<p>Logged in successfully</p>";
    // do stuffs
    header('location: admin1.php');
}


?>
