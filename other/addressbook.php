<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Secure Area </title>
	<link rel="stylesheet" type="text/css" href="css/basic_2.css" />
</head>

<body>

<h3> Thank You!</h3>

<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$ptype = $_POST['ptype'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$card = $_POST['card'];
	$exp = $_POST['exp'];
	$cvv = $_POST['cvv'];

	print "<p>Your name is $firstname $lastname "; 
	print "your address is $address ";
	print "your $ptype number is $number ";
	print " and your $ctype number is $card $exp $cvv</p>";

?>

</body>
</html>


