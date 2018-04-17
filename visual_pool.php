<DOCTYPE html>
<html>
<head>
	<title>Visual_Pool</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="container">
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="col-1" href="#"><img src="css/img/logo-go-and-live-group.png" alt="goandlive"></a>
				<div class="col-4 row">
					<ul class="navbar-nav ml-auto mr-auto">
						<li class="nav-item col-4"><a class="nav-link text-white" href="#">Accueil</a></li>
						<li class="nav-item col-4"><a class="nav-link" href="#" data-toggle="modal" data-target="#ModalConnexion">Connexion</a></li>
					</ul>
				</div>
				<div class="col">
					<ul class="navbar-nav">
						<li class="nav-item ml-auto"><a class="nav-link" href="#">Contactez-nous</a></li>
					</ul>
				</div>
		</nav>
	</header>


	<div class="title">
		<h1 >Destination</h1>
		<h2>Nom de la personne</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<h2>Description</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<div class="pictures">
					<img src="https://cdn.pixabay.com/photo/2018/04/10/02/07/panoramic-3306144_960_720.jpg" alt="New-York" style="width: 90%">
					<br><br>
					<div class="smallPictures">
						<img src="css/img/londres.jpg" alt="Londres" style="width: 30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width:30%">
						<img src="css/img/londres.jpg" alt="Londres" style="width: 30%">
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div id=activeInactive>
					<h3>Disponibilité cagnotte</h3>
					<label class="checkbox-inline">
  						<input type="checkbox" checked data-toggle="toggle"> Actif
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" data-toggle="toggle"> Inactif
					</label>
			
				</div>
				<br><br>

				<div id="circles">
					<span class="dot"><h5>Collectés</h5></span>
					<span class="dot"><h5>Jours restants</h5></span>
					<span class="dot"><h5>Participants</h5></span>
				</div>
				<br><br>

				<h3>Progression</h3>
				<div class="progress" style="width: 80%">
			        <div class="progress-bar" role="progress-bar" aria-valuenow="70" aria-value-min="0" aria-value-max="100" style="width: 70%">
			        </div>
			    </div>
			    <br><br>

				<button type="button" class="btn-primary btn-lg">Dépenser ma cagnotte</button>
				<br><br>
				<button type="button" class="btn-primary btn-lg">Paramètres de la cagnotte</button>
			</div>
		</div>
	</div>

	<footer></footer>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</body
<?php include ('footer.php') ; ?>
</html>