<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'ap-cdbr-azure-east-c.cloudapp.net';
$databaseName = 'acsm_581c9d4a8ca6f21';
$databaseUsername = 'b70bf26a0e51fe';
$databasePassword = '408b52f1';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
