<?php
$dbhost = 'ap-cdbr-azure-east-c.cloudapp.net';
$dbuser = 'b70bf26a0e51fe';
$dbpass = '408b52f1';
$dbname = 'acsm_581c9d4a8ca6f21';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');


mysql_select_db($dbname);

$query = "SELECT * FROM responce";
$result = mysql_query($query);
?>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
  <th>User ID :</th>
  <?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC))

mysql_close($conn);

?>