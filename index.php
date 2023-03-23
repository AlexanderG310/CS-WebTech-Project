<?php
echo '<!doctype html>';
echo '<html>';
echo '<head>';
echo '<link href="assests/css/bootstrap.css" rel="stylesheet" type="text/css">';
echo '<link href="assests/css/mystyle.css" rel="stylesheet" type="text/css">';
echo '<meta charset="utf-8">';
echo '</head>';
echo '<body>';
echo '<div class="banner" align="center">Welcome to my Resume Page!</div>';
if (isset($_REQUEST['page']))
	$page = $_REQUEST['page'];
else
	$page = "index";
include("navigation.php");
switch($page){
	case "index":
		echo '<title>Home</title>';
		echo '<p class = "introP"><b>Hello all, my name is Alejandro Garcia. This is an informal resume I am creating just to get ideas out there and a bit of practice. Some parts might of this website might be weird, but I like experimenting and tinkering with things!</b><br/> To begin, I\'d like to give a small biography of myself including what lead me to CS, my education, and my goals and dreams. During my early ages, our family had a computer with Win95 on it, it was old, noisy, but fun to use and fascinating. We couldn\'t do much with out computer as tech wasn\'t too advanced yet and the internet was still in its early days. <br/>';
		echo '<sup>As people on the internet say today, it was not a very safe for work place either..</sup></p>';
		echo '<p class = "paraFloat">Regardless, the more I grew up I became even more fascinated with computers and technologies coming out. We bought new computers over the years and more powerful ones that could play these next gen games with even cooler 3d graphics. I believe around this point - we had a WinXP PC that would be able to run most things for the most part. This was what I considered my first small exposure to Computer Sciencey stuff as during this time, me and a family member would mess around and modify games to make silly things happen in them. The passion for modifying games and programs grew a lot over the yearsthat said family member went to university to study CS. I eventually also wanted to do the same thing as - I guess - we became a very <q>technological</q> family and enjoyed computers to the point where we have old hardware and unused computers laying around.</p>';
		echo '<p class = "paraFloat">There are many things to be said regarding how passion grew, however, to not get carried off, I will talk about my education. I am currently a student attending UTSA to earn a Bachelor\'s Degree in Computer Science and on my last 2 semesters before graduating. There were some tough times during my progression, but thanks to family members - I was able to make it through the rocky road. I\'ve learned a lot from this school, <em>though some things I had to learn on my own</em>, but it was quite a fun experience seeing code come together and work giving you some sense of satisfaction. After I graduate, I have a few goals in mind like further investing in making a Discord Bot that can be in multiple servers for users to use and have fun with, I would also love to create an indie game alone or with a small group of friends for fun. There are more goals to list, but once again to keep things short, I\'ll move on to some of my noteable moments while in school and things I\'ve done outside.</p>';
		echo '<img src="../hw3/assets/images/samuelbernertotoro.jpg" width="320" height="481" class = "img-responsive img-circle centerImg"> ';
		echo '<sup>10/10/2022</sup>';
		break;
	case "experiences":
		include("experiences.php");
		break;
	case "projects":
		include("projects.php");
		break;
	case "contact":
		include("contact.php");
		break;
	case "results":
		include("results.php");
		break;
	case "entries":
		echo '<title>Entries</title>';
		include("entries.php");
		break;
	default:
		echo '<title>Home</title>';
		echo '<p class = "introP"><b>Hello all, my name is Alejandro Garcia. This is an informal resume I am creating just to get ideas out there and a bit of practice. Some parts might of this website might be weird, but I like experimenting and tinkering with things!</b><br/> To begin, I\'d like to give a small biography of myself including what lead me to CS, my education, and my goals and dreams. During my early ages, our family had a computer with Win95 on it, it was old, noisy, but fun to use and fascinating. We couldn\'t do much with out computer as tech wasn\'t too advanced yet and the internet was still in its early days. <br/>';
		echo '<sup>As people on the internet say today, it was not a very safe for work place either..</sup></p>';
		echo '<p class = "paraFloat">Regardless, the more I grew up I became even more fascinated with computers and technologies coming out. We bought new computers over the years and more powerful ones that could play these next gen games with even cooler 3d graphics. I believe around this point - we had a WinXP PC that would be able to run most things for the most part. This was what I considered my first small exposure to Computer Sciencey stuff as during this time, me and a family member would mess around and modify games to make silly things happen in them. The passion for modifying games and programs grew a lot over the yearsthat said family member went to university to study CS. I eventually also wanted to do the same thing as - I guess - we became a very <q>technological</q> family and enjoyed computers to the point where we have old hardware and unused computers laying around.</p>';
		echo '<p class = "paraFloat">There are many things to be said regarding how passion grew, however, to not get carried off, I will talk about my education. I am currently a student attending UTSA to earn a Bachelor\'s Degree in Computer Science and on my last 2 semesters before graduating. There were some tough times during my progression, but thanks to family members - I was able to make it through the rocky road. I\'ve learned a lot from this school, <em>though some things I had to learn on my own</em>, but it was quite a fun experience seeing code come together and work giving you some sense of satisfaction. After I graduate, I have a few goals in mind like further investing in making a Discord Bot that can be in multiple servers for users to use and have fun with, I would also love to create an indie game alone or with a small group of friends for fun. There are more goals to list, but once again to keep things short, I\'ll move on to some of my noteable moments while in school and things I\'ve done outside.</p>';
		echo '<img src="../hw3/assets/images/samuelbernertotoro.jpg" width="320" height="481" class = "img-responsive img-circle centerImg"> ';
		echo '<sup>10/10/2022</sup>';
		break;
}
echo '</body></html>';
?>
