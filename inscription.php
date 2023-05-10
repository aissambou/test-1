<!DOCTYPE html>

<html>


<head>
<title>INSCRIPTION</title>
<meta charset="utf-8">
<style>
    label{
	        width : 20%;
			display : inline-block;
			text-align : left;
	     }
		 
	body{
	        width : 50%;
			font-family : arial;
			margin : 5px auto;
			background : #f4f7f8;
			padding : 20px;
			color : #1abc9c;
	    }	 
		
	fieldset{
	            border-radius : 8px;
	        }	
	
	legend{
	        font-size : 1.4em;
  			margin-bottom : 10px;
	      }
		  
	input[type="text"], input[type="number"], input[type="Email"]
        {
		    border-radius : 5px;
			padding : 10px;
			width : 70%;
			background-color : #ffff;
			margin : 10px;
		}

	input[type="submit"]
        {
		    position : relative;
			padding : 20px;
			font-size : 18px;
			border : 1px solid #16a085;
			border-radius : 2px;
			margin-top : 8px;
			width : 100%;
			font-size : 18px;
			font-style : bold;
			color : #000;
		}

	ul{
	    list-style-type : none;
		padding : 20px;
		overflow : hidden;
		margin : 10px;
		background-color : #333;
	  }	
	  
	li{
	    display : inline;
		padding : 10px;
		margin : 10px;
	  }  
	li a {
	        color : white;
			padding : 20px;
			margin : 10px;
	     }  
</style>
</head>


<body> <!-- page d'acceuil -->

<header>
    <nav>
	    <ul>
		    <li><a href="liste.php"> acceuil</a></li>
			<li><a href="https://www.tchip.fr/marquehistoiretchip"> journal</a></li>
			<li><a href="https://www.tchip.fr/services_forfaits">contactez-nous</a></li>
		</ul>
	</nav>
</header>

<form action="insertion.php" method="GET">
    <fieldset>
	<legend>INSCRIPTION</legend>
    <label>nom</label><input type="text" name="nom" placeholder="votre nom ici"/><br>
	<label>prénom</label><input type="text" name="prenom" placeholder="votre prénom ici"/><br>
	<label>Tel</label><input type="number" name="tel" placeholder="votre numéro de téléphone ici"/><br>
	<label>Email</label><input type="Email" name="email" placeholder="votre email ici"/><br>
	<label>adresse</label><input type="text" name="adresse" placeholder="votre adresse ici"/><br>
	<input type="submit" value="valider"/>
	</fieldset>
</form>

</body>


</html>
