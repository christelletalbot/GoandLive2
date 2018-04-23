@include ('partials/header')



	<div class="text-center mt-4 ">
		<h1 class="text-capitalize">{{$titre}}</h1>
	</div>
	<div class="text-center mb-5">
		<h2 class="text-capitalize">{{$destination}}</h2>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="text-center">{{$description}}</p>

				<div class="pictures text-center">
					<img src="css/img/londres.jpg" alt="New-York" style="width: 90%">

					<div class="smallPictures mt-2 mb-4">
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
					<div classe="text-center"></div>
				</div>
				<div class="row justify-content-around mt-4">
					<div class="ml-3">Collecté</div>
					<div class="ml-2">Jours Restants</div>
					<div class="">Participants</div>
				</div>

				<div class="row justify-content-around mt-2">
					<div class="dot col-3 bg-primary"><span>{{$ac_money}}</span></div>
					<div class="dot col-3 bg-primary"><span>Test</span></div>
					<div class="dot col-3 bg-primary"><span>Test</span></div>
				</div>

				<h3 class="mt-4">Progression</h3>
				<div class="progress mb-4" style="width: 80%">
			        <div class="progress-bar" role="progress-bar" aria-valuenow="70" aria-value-min="0" aria-value-max="100" style="width: 70%">
			        </div>
			    </div>

				<a href="create_pool"><button type="button" class="btn-primary btn-lg">Paramètres de la cagnotte</button></a>
			</div>
		</div>
	</div>


@include ('partials/footer')