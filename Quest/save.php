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
## query database
	# prepare data for insertion
	$response1	= $_POST['age'];
	$response2	= $_POST['gende'];
	$response3	= $_POST['answer'];
	$response4	= $_POST['phones'];
	$response5	= $_POST['response'];
	$response6 = $_POST['rating'];
	$response7	= $_POST['use'];
	$response8	= $_POST['spread'];
	$response9	= $_POST['new'];
 
	# check if username and email exist else insert
	$exists = 0;
	
		$exists = 1;
	
		# insert data into mysql database
		$sql = "INSERT  INTO `response` (`response1`, `response2`, `response3`, `response4`, `response5`, `response6`, `response7`, `response8`, `response9') 
				VALUES (NULL, '{$response1}', '{$response2}', '{$response3}', '{$response4}', '{$response5}', '{$response6}', '{$response7}', '{$response8}', '{$response9}')";
 
		if ($mysqli->query($sql)) {
			
			//echo "New Record has id ".$mysqli->insert_id;
			echo "<p>Submmited successfully!</p>";
			header('location: login.php');
		} else {
			echo "<p>MySQL error no {$mysqli->errno} : {$mysqli->error}</p>";
			exit();
		}
	}
}
?>