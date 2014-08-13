<html>
<head>
	<title>Thank You! </title>
	<link rel="stylesheet" type="text/css" href="family_tree.css" />
<link rel="stylesheet" type="text/css" href="family_tree.css" />
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Gloria+Hallelujah|Indie+Flower|Pontano+Sans|Righteous' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>

<body>

<h3> Thank You!</h3>
<div class="container">
	<div class="box">
		<div class="content">

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$marriedname = $_POST['marriedname'];
	$status = $_POST['status'];
	$spouce = $_POST['spouce'];
	$status = $_POST['status'];
	$children = $_POST['children'];
	$location = $_POST['location'];
	$hometown = $_POST['hometown'];
	$mother = $_POST['mother'];
	$mmadien = $_POST['mmadien'];
	$father = $_POST['father'];
	$siblings = $_POST['siblings'];
	$extra = $_POST['extra'];



	

	print "<h3>You are in the</h3> <h4>$marriedname /$lastname / $mmadien</h4> <h3>family</h3>"; 
	print "<p>Your name is $firstname $lastname, ";
	
	print "You live in $location and are from $hometown. ";
	print "Your parents are $mother and $father ";
	print "and your siblings are $siblings.</p>";


?>
</div>
</div>
</div>

</body>
</html>

