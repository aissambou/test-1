<?php /* page modification d'un client */

include "connexion.php";

 if(isset($_GET["id"]) && isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["tel"]) && isset($_GET["email"]) && isset($_GET["adresse"]))
	 
	{
	    $id=$_GET["id"];
        $nom=$_GET["nom"];
        $prenom=$_GET["prenom"];
        $tel=$_GET["tel"];
        $email=$_GET["email"];
        $adresse=$_GET["adresse"];

        $req=mysqli_query($link,"UPDATE clients SET nom='$nom', prenom='$prenom', tel='$tel', email='$email', adresse='$adresse' WHERE id='$id'");
		     
			if($req)
			   {
				header("location:liste.php");
			   }
			else
			{
                echo "echec de mise à jour";				
		    }
				
	}
 else
    {
	    echo "champ manquant"; 
    }	 