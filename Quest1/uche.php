<?php
# mysql db constants DB_HOST, DB_USER, DB_PASS, DB_NAME
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'msc_project';


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
 header('location: admin.php');
}


?>