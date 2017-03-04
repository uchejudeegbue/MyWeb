<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM responce ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<h1 align='center'>Customers feedback</h1><br/><br/>

	<table width='100%' border=0 align='center'>

	<tr bgcolor='#CCCCCC'>
		<td>ID</td>
		<td>Age Bracket</td>
		<td>Gender</td>
		<td>Use of Smartphone?</td>
		<td>Popular brand</td>
		<td>Used Huawei smartphones before?</td>
		<td>Product rating</td>
		<td>Interested to test our product?</td>
		<td>Geographical spread</td>
		<td>Would you like to test our product</td>
		<td>Delete</td>
		
		
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['user_ID']."</td>";
		echo "<td>".$res['response1']."</td>";
		echo "<td>".$res['response2']."</td>";	
		echo "<td>".$res['response3']."</td>";
		echo "<td>".$res['response4']."</td>";
		echo "<td>".$res['response5']."</td>";	
		echo "<td>".$res['response6']."</td>";
		echo "<td>".$res['response7']."</td>";
		echo "<td>".$res['response8']."</td>";
		echo "<td>".$res['response9']."</td>";
		echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
