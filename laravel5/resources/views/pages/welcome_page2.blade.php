@include ('partials/header')

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

@include ('partials/footer')		

			
		