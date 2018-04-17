@include ('partials/header')



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


@include ('partials/footer')