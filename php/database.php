<!DOCTYPE html>
<html>

<head>
	<link href="../css/main.css" media="all" rel="stylesheet">
	<meta name="author" content="iHeArCoLoRs">
	<meta name="description" content="Welcome to EloFiend! We host tournaments for Brawlhalla!">
	<meta name="robots" content="archive,follow">
	<meta http-equiv="Refresh" content="6; ../signup.htm" />
	<title>EloFiend Tournament - Form Finished</title>
</head>

<body>
	<!--Header-->
	<header>
		<h1 style="text-align: center;">Brawlhalla Tournaments</h1>
	</header>
	<!--Navigation-->
	<nav>
		<ul>
			<li><a href="../index.htm">Home</a></li>
			<li><a href="../signup.htm">Signup</a></li>
			<li><a href="../brackets.htm">Brackets</a></li>
			<li><a href="../login.htm">Login</a></li>
		</ul>
	</nav>
	<main>
		<?php
		$user = 'username';
		$pass = 'password';
		$db = 'signupdb';
		date_default_timezone_set('America/New_York');
		$date = date('m/d/Y h:i:s a', time());
		$sql = "INSERT INTO signupdb (teamName,firstPerson,secondPerson,date) VALUES ('$_POST[teamName]','$_POST[firstPerson]','$_POST[secondPerson]', '$date')";





		if (isset($_POST['submit'])){
						$db = mysql_connect('mysql15.000webhost.com', $user, $pass) or die("Unable to connect to sql server.");
			mysql_select_db('a9900613_elo', $db);

			mysql_query($sql, $db) or die("Could not submit query " . mysql_error());



			mysql_close($db);


		}
		?>
		<p>Thank you for your applicaiton, we will look over it and add you to our brackets within 24 hours.</p>
		<p>You will now be redirected back to the sign up page, but if you're not you can use the navigation to get back</p>
	</main>
	<!--Footer-->
	<footer>
		<p>EloFiend &copy; 2015 | All Rights Reserved</p>
	</footer>
</body>

</html>
