<?php
	include("functions.php");
	echo '<title>Results</title>';
	echo '<h3 align="center">Contact Form Data Results</h3>';
	$dblink = db_connect("contact_data");
	$sql = "Select * from `user_input` where 1";
	$results = $dblink->query($sql) or
		die("Something went wrong with: $sql".$dblink->error);
	echo '<table border="1" width="100%" style="color:lightgray;">';
	echo '<tr>';
	echo '<th>Record #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th><th>Comments</th>';
	echo '</tr>';
	while($data = $results->fetch_array(MYSQLI_ASSOC))
	{
		echo '<tr>';
		echo '<td>'.$data['auto_id'].'</td>';
		echo '<td>'.$data['first_name'].'</td>';
		echo '<td>'.$data['last_name'].'</td>';
		echo '<td>'.$data['email'].'</td>';
		echo '<td>'.$data['username'].'</td>';
		echo '<td>'.$data['comment'].'</td>';
		echo '</tr>';
	}
	echo '</table>';
?>