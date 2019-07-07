<!DOCTYPE html>
<html>
	<head>
		<link href="images/icon.png" rel="icon" type="image/x-icon"/> 
		<link id="pagestyle" rel="stylesheet" href="css/final.css">
		<title>Symposium E.S.C.</title>
		<meta name="robots" content="noindex,nofollow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta charset="UTF-8"/>
		<link rel="icon" href="images/logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link id="pagestyle" rel="stylesheet" href="css/final.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alternative="logo"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="program.html">Program</a></li>
						<li><a href="keynotespeakers.html">Keynote Speakers</a></li>
						<li><a href="location.html">Location</a></li>
						<li><a href="sponsors.html">Sponsors</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li class="active"><a href="register.html">Register</a></li>
						<li><a href="aboutus.html">About Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="container">
			<h1>Succesfully registered</h1>
		</header>
		<div class="container">
			<p>
				Name: 
				<?php echo htmlspecialchars($_POST["name"]);?>
			</p>
			<p>
				E-mail:
				<?php echo htmlspecialchars($_POST["email"]);
				mail($_POST["email"],"E.S.C. Symposium", "Dear ".htmlspecialchars($_POST["name"])."\n\nYou have succesfully registered for the symposium on the 13th of april 2019.\n\nSee you there!\n\nThe Electronic Speakers Collective");?>
			</p>
			<p>
				Phone:
				<?php if (!empty($_POST["phone"])) { echo htmlspecialchars($_POST["phone"]);} else {echo "-";}?>
			</p>
			<p>
				Remarks:
				<?php if (!empty($_POST["remarks"])) { echo htmlspecialchars($_POST["remarks"]);} else {echo "-";}?>
			</p>
			<p>
				You have received an e-mail as a reminder. See you on the 13th of april!
			</p>
			<a href="register.html">Back</a>
		</div>
		<footer class="footer">
			Chamber of Commerce 99.95.00.1B.27
		</footer>
	</body>
</html>
