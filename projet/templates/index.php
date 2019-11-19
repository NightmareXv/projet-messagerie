<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulaire d'inscription </title>
		<meta name="viewport" content="width, initial-scale=1.0">
		
		
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/header-fixed.css">
	</head>

	<body>
	<header class="header-fixed">

	<div class="header-limiter">

		<h1><a href="#">Uni-<span>Chat</span></a></h1>

		<nav>
			<a href="Profile.php">profile</a>
			<a href="authen.php">Se deconnecter</a>
		</nav>

	</div>

</header>

		<div class="wrapper"  style="background-image: url('images/back.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/front.jpg" alt="">
				</div>
				<form action="login.php" method = "POST" >
					<h3>Formulaire d'inscription </h3>
					<div class="form-group">
						<input type="text" placeholder="Nom" name = "Nom" class="form-control">
						<input type="text" placeholder="Prénom" name = "prenom" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Alias" name = "Alias" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Adresse mail" name ="email" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="Sexe" id="" class="form-control">
							<option value="" disabled selec	ted>Sexe</option>
							<option value="Homme">Male</option>
							<option value="Femme">Female</option>
							<option value="Autre">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Mot de passe" name ="mdp" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirmez votre mot de passe" name ="mdp2" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<input type="submit" value="s'inscrire", name = "submit"/>
					<br>
					<?php
						if(isset($_GET['err'])){
							if($_GET['err'] == 1)
								echo '<div class="alert alert-danger">ce pseudo existe deja</div>';
							elseif($_GET['err'] == 4)
								echo "veuillez remplir les champs nom prenom e-mail";
							elseif ($_GET['err'] == 3)
								echo "les deux mot de passe doivent etre similaire";
							elseif ($_GET['err'] == 2)
								echo "mot de pass trop cours";
							}
					?>
				</form>
			</div>
		</div>
		
	</body>
	
</html>