<?php
  session_start();
?>  
@include('partials.header')



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<div class="page-title mt-5 mb-5">
  <h1 class="page-title">
    <span class="base" data-ui-id="page-title-wrapper">NOUS CONTACTER</span>
  </h1>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="container">    
        <form class="form contact" action="https://www.goandlive.com/contact/index/post/" id="contact-form" novalidate="novalidate">  
            <h3>CONTACTEZ NOUS</h3> 
              <p>Rue de la Comtesse Cécile
                <br>  
                CS 33333
                <br>
                12033 RODEZ CEDEX 9 FRANCE
              </p>
              <p>Tel: 0 800 899 000
                <br>
                Email : contact_web@goandlive.com
                <br>
                Web : www.goanlive.com
              </p>
            <h3>RELATIONS MEDIAS GO & LIVE</h3>
            <h3>GIESBERT & ASSOCIES</h3> 
              <p>Mathilde Ratineaud
                <br>
                m.ratineaud@giesbert-associes.com
                <br>
                Tel : 07 85 53 50 05
              </p> 
          </form>    
        </div> 
      </div>       
   
    <div class="col-md-6">
      <legend class="legend">
        <span>Une question ?</span>  
      </legend> 
    
      <form method="POST">
        {{ csrf_field ()}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Votre nom</label>
            <input type="text" name="name" class="form-control" id="inputname">
          </div>
        </div> 
        <div class="col-md-6">
          <div class="form-group">
            <label for="email" >Votre mail</label>
            <input type="text" name="email" class="form-control" id="email">
          </div>
        </div> 
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone" >Votre numéro de téléphone</label>
              <input type="text" name="phone" class="form-control" id="phone">
            </div>
          </div> 
          <div class="col-md-12">
            <div class="form-group">
              <label for="message">Comment pouvons-nous vous aider ?</label>
              <textarea id="message" name="message" class="form-control"></textarea> 
            </div>
            <button type="submit" id="btn" class="btn btn-primary">Envoyer</button>
          </div> 
        </form>
      </div>  
     
  <div class="row justify-content-md-center">
    <div class="col-md-auto">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2853.1823677614852!2d2.577374050581064!3d44.34730471518567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27da0a759c57f%3A0xff57de7b3199cf8b!2sRue+de+la+Comtesse+C%C3%A9cile%2C+12000+Rodez!5e0!3m2!1sfr!2sfr!4v1524132663046" width="1150" height="456" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
      <div class="col-md-4 text-center mt-5">
        <div class="reassurance-title">
          <h4>Satisfaction garantie</h4>
          <p>Go&Live saura vous accompagner
          <br>  
          quel que soit votre besoin.</p>
        </div>
      </div> 
      <div class="col-md-4 text-center mt-5">     
        <div class="reassurance-payement">
          <h4>Paiement sécurisé</h4>
          <p>
          Toutes les transactions bancaires
          <br>
          en ligne sont 100% sécurisées.
          </p>
        </div>
      </div>
      <div class="col-md-4 text-center mt-5">
        <div class="reassurance-contact">
          <h4>Contact</h4>
          <p>Nous sommes à votre écoute
          <br>
          pour toutes vos demandes.
          </p>
        </div>
      </div>  
    </div>
  </div>



@include('partials.footer')
	