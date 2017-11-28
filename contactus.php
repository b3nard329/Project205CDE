<?php session_start();?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="contactus.css">


</head>






<body>
<?php 
	
	include('navbar.php');

	?>
	  <h1>Contact</h1>
   
  <form action="contact_handle.php" method="post">
	    <h1 style="text-align:center"> Any Question, Contact Us</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			<div class="form-group">
			<p>Surname<span>*</span></p>
			<span class="icon-case"><i class="fa fa-male"></i></span>
				<input type="text" name="surname" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
			</div> 

            <div class="form-group">
            <p>Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
				<input type="text" name="name" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>E-mail <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
			</div>

			
			<div class="form-group">
			<p>Phone number <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-phone"></i></span>
				<input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
			</div>

		</div>

		<div class="rightcontact">	
			<div class="form-group">
			<p>Address <span>*</span></p>
			<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="address" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Postcode <span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>State <span>*</span></p>
			<span class="icon-case"><i class="fa fa-building-o"></i></span>
				<input type="text" name="state" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
			</div>	

	
			
		</div>
		
		
		<div class="form-group" style="margin-left:70px">
			<p>Message <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
			</div>	
	</div>
	
<button type="submit" class="bouton-contact">Send</button>

<a href="homepage.php"><button type="button" class="bouton-contact" style="margin-top:10px">Exit</button></a>
	
</form>	

  
</body>
</html>