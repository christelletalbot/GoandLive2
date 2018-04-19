@include ('partials/header')

		<div class="jumbotron mb-0">
			<h1 class="display-3">Finance ton voyage</h1>
			<p class="lead">Envie d'un voyage? Créez ta cagnotte et collecte pour partir à l'endroit de tes rêves</p>
			<p class="lead"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">Je crée ma cagnotte</a></p>
		</div>
		<div class="container bg-primary test1">	
			<div class="row title">
				<div class="col title-cag">Des cagnottes pour les voyages</div>
			</div>
			<div class="test row justify-content-around">
				<div class="col-1 rond"><span>Test</span></div>
				<div class="col-1 rond"></div>
				<div class="col-1 rond"></div>
				<div class="col-1 rond"></div>
				<div class="col-1 rond"></div>
				<div class="col-1 rond"></div>
			</div>
			<div class="test row justify-content-around text-white mt-2 text-center">
					<div class="col-1 ">Bienêtre</div>
					<div class="col-1 ">Sport</div>
					<div class="col-1 ">Etudes</div>
					<div class="col-1 ">Famille</div>
					<div class="col-1 ">Colonie</div>
					<div class="col-1 ">Découvertes</div>
			</div>
			<div class="row title-bot">
				<div class="col title-cag-bot">Voyages linguistiques, sportifs ou même famillial, participe à la cagnotte de tes amis ou d'inconnus pour leur permettre de voyager !</div>
			</div>						
		</div>
		<div class="container bg-success">
			<div class="row title">
				<div class="col title-cag"> Pourquoi nous ?</div>
			</div>
			<div >
				<div class="title-cag-bot">Profitez gratuitement de nos services, avec des participations et des dépenses totalement sans frais</div>
				<div class="title-cag-bot">Un système de paiement sécurisé, fiable et de qualité. Aucune commission</div>
			</div>
		</div>

		<!-- Modal Inscription -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p><a href="#" class="btn btn-primary text-white">Connectez-vous en tant que</a></p>
		      	<p>ou</p>
		        <form method="post">
		        	 {{ csrf_field() }}
				  <div class="form-group">
				    <label for="InputLastame">Nom</label>
				    <input type="text" class="form-control" id="InputLastname" aria-describedby="Lastname" placeholder="Entre ton Nom" name="nom">
				  </div>
				  <div class="form-group">
				    <label for="InputName">Nom</label>
				    <input type="text" class="form-control" id="InputName" aria-describedby="Name" placeholder="Entre ton Prénom" name="prenom">
				  </div>
				  <div class="form-group">
				    <label for="Birthdate">Date de naissance</label>
				    <input type="date" class="form-control" id="Birthdate" aria-describedby="Name" name="birthday">
				  </div>
				  <div class="form-group">
				    <label for="Birthdate">Portable</label>
				    <input type="number" class="form-control" id="Phonenum" aria-describedby="Phonenum" placeholder="Numéro">
				  </div>	  		  		  		  		  		  
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
				  </div>
				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" class="btn btn-primary">Incription</button>
				</form>

		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Incription2</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#ModalConnexion">Déjà un compte ?</button>        
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal Connexion -->
		<div class="modal fade" id="ModalConnexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<p><a href="#" class="btn btn-primary text-white">Connectez-vous en tant que</a></p>
		      	<p>ou</p>		      	
		        <form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
		        <a href="welcome_page2"><button type="button" class="btn btn-primary">Connexion</button></a>
		      </div>
		    </div>
		  </div>
		</div>	""
	</div>

@include ('partials/footer')