<?php /* page supprimer un client*/

    include"connexion.php";

    if (isset($_POST["id"])) 
        {
		    $id=$_POST["id"];
			$req=mysqli_query($link,"delete from clients where id='$id'");
			
			if($req)
			    {
					header("location:liste.php");
				}
				
			else
			    {
				    echo "erreur suppresion";
			    }				
        }
	else 
   		{
	        echo "champs manquant";  	
	    }
?>