<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'msc_project';
mysql_select_db($dbname);

$query = "SELECT * FROM responce";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
echo "User ID :{$row['user_ID']} <br>" .
"Age : {$row['response1']} <br>" . 
"clanwebsite : {$row['clanwebsite']} <br><br>";
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