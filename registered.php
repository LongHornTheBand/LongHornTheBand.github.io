<!DOCTYPE html>
<html>
	<head>
		<link href="images/icon.png" rel="icon" type="image/x-icon"/> 
		<link id="pagestyle" rel="stylesheet" href="css/final.css">
		<title>Long Horn</title>
		<meta name="robots" content="noindex,nofollow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta charset="UTF-8"/>
		<link rel="icon" href="images/longhornlogo.png">
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
					<a class="navbar-brand" href="index.html"><img src="images/longhornlogo.png" class="logo" alternative="logo"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="program.html">Programma</a></li>
						<li><a href="sponsors.html">Sponsors</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li class="active"><a href="register.html">Registeer</a></li>
						<li><a href="aboutus.html">Info</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<header class="container">
			<h1>Succesvol geregistreerd</h1>
		</header>
		<div class="container">
			<p>
				Naam: 
				<?php echo htmlspecialchars($_POST["name"]);?>
			</p>
			<p>
				E-mail:
				<?php echo htmlspecialchars($_POST["email"]);
				mail($_POST["email"],"Long Horn The Band", "Beste ".htmlspecialchars($_POST["name"])."\n\nU bent succesvol geregistreerd.\n\nTot dan!\n\nLong Horn the band");?>
			</p>
			<p>
				Telefoon:
				<?php if (!empty($_POST["phone"])) { echo htmlspecialchars($_POST["phone"]);} else {echo "-";}?>
			</p>
			<p>
				Opmerkingen:
				<?php if (!empty($_POST["remarks"])) { echo htmlspecialchars($_POST["remarks"]);} else {echo "-";}?>
			</p>
			<p>
				U heeft een e-mail van ons ontvangen.
			</p>
			<a href="register.html">Terug</a>
		</div>
		<footer class="footer">
			Long Horn
		</footer>
	</body>
</html>
