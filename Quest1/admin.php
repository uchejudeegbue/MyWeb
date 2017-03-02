<?php
$dbhost = 'ap-cdbr-azure-east-c.cloudapp.net';
$dbuser = 'b70bf26a0e51fe';
$dbpass = '408b52f1';
$dbname = 'acsm_581c9d4a8ca6f21';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');


mysql_select_db($dbname);

$query = "SELECT * FROM responce";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "User ID :{$row['user_ID']} <br>" .
"Age : {$row['response1']} <br>" . 
"clanwebsite : {$row['clanwebsite']} <br><br>";

  echo '<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
  <tr>
    <td width="14%" align="center">User ID</td>
    <td width="14%" align="center">Details</td>

</tr>
</table>';
}
mysql_close($conn);

?>

<html>
<table border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="100%" id="AutoNumber2" bgcolor="#C0C0C0">
  <tr>
    <td width="14%" align="center">Clan</td>
    <td width="14%" align="center">Clan Website</td>
    <td width="14%" align="center">Number of Players</td>
    <td width="14%" align="center">Gametype</td>
    <td width="14%" align="center">Map</td>
    <td width="15%" align="center">Date</td>
    <td width="15%" align="center">Result</td>
  </tr>
  <tr>
    <td width="14%" align="center">&nbsp;</td>
    <td width="14%" align="center"><?php {echo "{$row['clanwebsite']}";} ?></td>
    <td width="14%" align="center">&nbsp;</td>
    <td width="14%" align="center">&nbsp;</td>
    <td width="14%" align="center">&nbsp;</td>
    <td width="15%" align="center">&nbsp;</td>
    <td width="15%" align="center">&nbsp;</td>
  </tr>
</table>
</html>