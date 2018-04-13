<!--!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css"/>
	<title>Create_Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header></header>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<ul>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>	
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>	
						</button>	
					</li>
				</ul>
			</div>
		</div>
		
	</nav>
	<br>

	<div class="facebook"></div>
	<div class="form">
		<form>
			<input type="text" name="surname" placeholder="mon nom complet">
			<input type="text" name="firstName" placeholder="mon prénom">
			<input type="text" name="birth" placeholder="ma date de naissance">
			<input type="text" name="email" placeholder="mon adresse mail">
			<input type="text" name="phoneNumber" placeholder="mon numéro de téléphone">
			<input type="text" name="password" placeholder="mon mot de passe">
			<input type="submit" name="createAccount">
			
		</form>
	</div>

	<footer></footer>

	<script src="js/jquery/dist/jquery.min.js"></script>
  	<script src="js/bootstrap/bootstrap.min.js"></script>
  	<script src="js/bootstrap/bootstrap.bundle.js"></script>
  	<script src="js/app.js"></script>


</body>
</html-->

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css"/>
	<title>Create_Account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<header></header>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<ul>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>
						</button>	
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">lorem</a>	
						</button>	
					</li>
				</ul>
			</div>
		</div>
		
	</nav>
	<br>

	<div class="container">
		<h1>Création de compte</h2>
		
		<button type="submit" class="btn btn-primary">via Facebook</button>
		<br><br>
		<button type="submit" class="btn btn-warning">via mon adresse mail</button>

		<form action="/action_page.php">
			<div class="form-group">
				<label for="surname">Nom:</label>
	    		<input type="surname" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="firstName">prénom:</label>
	    		<input type="firstName" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="email">Adresse mail:</label>
	    		<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
	    		<label for="pwd">Mot de passe:</label>
	    		<input type="password" class="form-control" id="pwd">
	  		</div>
	  		<button type="submit" class="btn btn-default">Créer compte</button>
		</form>
	</div>
	
	<footer></footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>

