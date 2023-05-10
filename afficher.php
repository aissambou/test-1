<!DOCTYPE html>

<!-- page affiche les details des clients -->

<html>


<head>
<title>affichage</title>
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
		  
	input[type="text"], input[type="number"], input[type="email"]
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


<body>  

<header>
    <nav>
	    <ul>
		    <li><a href="https://www.tchip.fr/"> acceuil</a></li>
			<li><a href="https://www.tchip.fr/marquehistoiretchip"> journal</a></li>
			<li><a href="https://www.tchip.fr/services_forfaits">contactez-nous</a></li>
		</ul>
	</nav>
</header>

<?php

    include "connexion.php";
	
	if(isset($_POST["id"]))
	    {
		    $id=$_POST["id"];
			$req=mysqli_query($link,"select * from clients where id='$id'");
			$res=mysqli_fetch_array($req);
	    }
	
	else
	    {
		    echo "champ manquant";
	    }
		
?>

<form action="modifier.php" method="GET">
    <fieldset>
	<legend>Détail</legend>
	<input type="hidden" name="id" value=<?php echo $res["id"] ?>/>
    <label>Nom</label><input type="text" name="nom" value="<?php echo $res["nom"];?>" placeholder="votre nom ici"/><br>
	<label>prénom</label><input type="text" name="prenom" value="<?php echo $res["prenom"];?>" placeholder="votre prénom ici"/><br>
	<label>Tel</label><input type="number" name="tel" value="<?php echo $res["tel"];?>" placeholder="votre numéro de téléphone ici"/><br>
	<label>Email</label><input type="Email" name="email" value="<?php echo $res["email"];?>" placeholder="votre mail ici"/><br>
	<label>Adresse</label><input type="text" name="adresse" value="<?php echo $res["adresse"];?>" placeholder="votre adresse ici"/><br>

	<input type="submit" value="Modifier"/>
	</fieldset>
</form>

</body>


</html>
