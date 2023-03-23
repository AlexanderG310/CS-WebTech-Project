<?php
include("functions.php");
echo '<title>Contact</title>';
if (!(isset($_POST['submit'])))
{
  echo '<h3 align="center">Contact Form</h3>';
  if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == "success")
  {
	echo '<div><p style="color:#66FF99;">Data entered successfully!</p></div>';  
  }
  echo '<form method="POST" action="">';
  echo '<div class="form-group">';
  echo '<label>First Name:</label>';
  echo '<input class="form-control" type="text" name="fname" id="fname" onBlur="checkName(this.value,this.id)">';
  echo '<p class="help-block" id="fnameHelp"></p>';
  echo '</div>';
  echo '<div class="form-group">';
  echo '<label>Last Name:</label>';
  echo '<input class="form-control" type="text" name="lname" id="lname" onBlur="checkName(this.value,this.id)">';
  echo '<p class="help-block" id="lnameHelp"></p>';
  echo '</div>';
  echo '<div class="form-group">';
  echo '<label>Email Address:</label>';
  echo '<input class="form-control" type="text" name="email" id="email" onBlur="checkEmail(this.value)">';
  echo '<p class="help-block" id="emailHelp"></p>';
  echo '</div>';
  echo '<div class="form-group">';
  echo '<label>Username:</label>';
  echo '<input class="form-control" type="text" name="username" id="username" onBlur="checkUsername(this.value)">';
  echo '<p class="help-block" id="usernameHelp"></p>';
  echo '</div>';
  echo '<div class="form-group">';
  echo '<label>Comments:</label>';
  echo '<textarea class="form-control" type="text" name="comment" id="comment" onBlur="checkComment(this.value)"></textarea>';
  echo '<p class="help-block" id="commentHelp"></p>';
  echo '</div>';
  echo '<button type="submit" name="submit" value="submit">Submit</button>';
  echo '</form>';
}
if (isset($_POST['submit']))
{
	$dblink = db_connect("contact_data");
	$firstname = $_REQUEST['fname'];
	$lastname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$comment = $_REQUEST['comment'];
	$sql = "Insert into `user_input` (`first_name`,`last_name`,`email`,`username`,`comment`) values";
	$sql.= " ('$firstname','$lastname','$email','$username','$comment')";
	$dblink->query($sql) or
		die("Something went wrong with $sql".$dblink->error);
	redirect("index.php?page=contact&msg=success");
	
}
?>
<script src="assests/js/validation.js"></script>