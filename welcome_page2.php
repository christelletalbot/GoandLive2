<!DOCTYPE html>
<html>
	<head>
		<title>welcome_page2</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
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

		<div class="container">

			<div class="form">
				<h1>Cagnottes publiques</h1>
				<br>
				<form>
					<input type="text" name="searchByName" placeholder="Rechercher par nom">
					<input type="text" name="searchByDestination" placeholder="Rechercher par destination">
					<input type="submit" name="go">	
				</form>
			</div>

			<div id=myCarousel class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="css/img/londres.jpg">
						<div class="carousel-caption">
							<h3>London</h3>
						</div>
					</div>
					<div class="item">
						<img src="css/img/londres.jpg">
						<div class="carousel-caption">
							<h3>London</h3>
						</div>
					</div>
					<div class="item">
						<img src="css/img/londres.jpg">
						<div class="carousel-caption">
							<h3>London</h3>
						</div>
					</div>
					<div class="item">
						<img src="css/img/londres.jpg">
						<div class="carousel-caption">
							<h3>London</h3>
						</div>
					</div>
				</div>

				<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				
		</div>
		

			
		
	<footer>
		<img src="londres.jpg" alt="London">
	</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	</body>
</html>