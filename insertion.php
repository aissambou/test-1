<?php /* page pour ajouter un utilisateur */
   
    include"connexion.php";
	
	if(isset($_GET["nom"])&&isset($_GET["prenom"])&&isset($_GET["tel"])&&isset($_GET["email"])&&isset($_GET["adresse"]))
	{

	        $nom=$_GET["nom"];
			$prenom=$_GET["prenom"];
			$tel=$_GET["tel"];
			$email=$_GET["email"];
			$adresse=$_GET["adresse"];
			
			$req=mysqli_query($link,"insert into clients(nom,prenom,tel,email,adresse)value('$nom','$prenom','$tel','$email','$adresse')");
			
			if($req)
			    {
				    echo"insertion effectuée";
			    }
			else
			    {
					echo"erreur d'insertion";
				}
	 }

?>