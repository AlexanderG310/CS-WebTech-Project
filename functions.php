<?php
function db_connect($db)
{
	//Removed for security
	$hostname = "";
	$username = "";
	$password = "";
	//$db = "docStorage";
	$dblink = new mysqli($hostname, $username, $password, $db);
	if (mysqli_connect_error())
	{
		die("Error connecting to database: ".mysqli_connect_error());
	}
	return $dblink;
}

function redirect($uri)
{ ?>
	<script type = "text/javascript">
	<!--
	document.location.href="<?php echo $uri; ?>";
	-->
	</script>
<?php die;
}
?>