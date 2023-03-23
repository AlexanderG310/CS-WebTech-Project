<?php
switch($page){
	case "index":
		echo '<ul class = "nav nav-tabs nav-justified">
			<li class = "navActive"><a href="index.php">Home</a></li>
			<li><a href = "index.php?page=experiences">Experiences</a></li>
			<li><a href = "index.php?page=projects">Projects</a></li>
			<li><a href = "index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
		break;
	case "experiences":
		echo '<ul class = "nav nav-tabs nav-justified">
			<li><a href = "index.php?page=index">Home</a></li>
			<li class = "navActive"><a href="index.php?page=experiences">Experiences</a></li>
			<li><a href = "index.php?page=projects">Projects</a></li>
			<li><a href = "index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
		break;
	case "projects":
		echo '<ul class = "nav nav-tabs nav-justified">
			<li><a href = "index.php?page=index">Home</a></li>
			<li><a href = "index.php?page=experiences">Experiences</a></li>
			<li class = "navActive"><a href="index.php?page=projects">Projects</a></li>
			<li><a href = "index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
		break;
	case "contact":
		echo '<ul class = "nav nav-tabs nav-justified">
			<li><a href = "index.php?page=index">Home</a></li>
			<li><a href = "index.php?page=experiences">Experiences</a></li>
			<li><a href = "index.php?page=projects">Projects</a></li>
			<li class = "navActive"><a href="index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
		break;
	case "results":
		echo '<ul class = "nav nav-tabs nav-justified">
			<li><a href = "index.php?page=index">Home</a></li>
			<li><a href = "index.php?page=experiences">Experiences</a></li>
			<li><a href = "index.php?page=projects">Projects</a></li>
			<li><a href = "index.php?page=contact">Contact</a></li>
			<li class = "navActive"><a href="index.php?page=results">Results</a></li>
		</ul>';
		break;
	default:
		echo '<ul class = "nav nav-tabs nav-justified">
			<li class = "navActive"><a href="index.php">Home</a></li>
			<li><a href = "index.php?page=experiences">Experiences</a></li>
			<li><a href = "index.php?page=projects">Projects</a></li>
			<li><a href = "index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
		break;
}
?>