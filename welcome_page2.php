<?php include 'header.php'; ?>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">		
				<ul>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">Cagnottes privées</a>
						</button>
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">Effectuer un don </a>	
						</button>	
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">Créer une cagnotte</a>	
						</button>	
					</li>
					<li>
						<button type="button" class="btn-default btn-lg">
							<a href="#">Nous contacter</a>
						</button>	
					</li>
				</ul>
			</div>
		</div>	
	</nav>

	<div class="form">
		<h1>Cagnottes publiques</h1>
		<form>
			<input type="text" name="searchByName" placeholder="Rechercher par nom">
			<input type="text" name="searchByDestination" placeholder="Rechercher par destination">
			<input type="submit" name="go">	
		</form>
	</div>

	<div class="image_caroussel">
		<a href="#">
			<img src="#" alt="#">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			</p>
		</a>
	</div>
<?php include 'footer.php'; ?>

