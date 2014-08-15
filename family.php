<html>
<head>
	<title>Thank You! </title>
	<link rel="stylesheet" type="text/css" href="family_tree.css" />
<link rel="stylesheet" type="text/css" href="family_tree.css" />
	<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed|Gloria+Hallelujah|Indie+Flower|Pontano+Sans|Righteous' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body id="hidden">

<h1 id="header"> Thank You!</h1>
<div class="container">
	<div class="box" id="results">
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
	$current = $_POST['current'];
	$home = $_POST['home'];



	

	print "<h1>You are in the</h1> <h2>$marriedname /$lastname / $mmadien</h2> <h1>family</h1>"; 
	print "<table><td>Name: $firstname $lastname </td>" ;
	
	print "<td>Location: $location </td>";
	print "<tr><td>Hometown: $hometown </td>";
	print "<td>Parents: $mother $mmadien and $father $lastname </td>";
	print "<tr><td>Siblings: $siblings $lastname</td> </table>";


?>
</div>
</div>
</div>
<footer>
	
	<span class="copy">&copy;opyright 2014. <a href="mailto:shannon@shannonknowscode.com">Shannon Smith</a> </span> 
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53852525-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

