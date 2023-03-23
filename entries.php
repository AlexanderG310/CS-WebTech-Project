<script src="assests/js/jquery-3.5.1.js"></script>
<?php

	echo '<title>Results</title>';
	echo '<h3 align="center">Contact Form Data Results</h3>';
	echo '<table border="1" width="100%" style="color:lightgray;">';
	echo '<tr>';
	echo '<th>Record #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Username</th><th>Comments</th>';
	echo '</tr>';
	echo '<tbody id = "results">';
	echo '</tbody>';
	echo '</table>';
?>

<script>
function refresh_div()
{
	$.ajax({
		type: 'post',
		//URL Removed for security purposes
		url: '',
		success: function(data) {
			$('#results').html(data);
		}
	});
};
setInterval(function() { refresh_div(); }, 500);
</script>