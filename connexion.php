<?php /* connexion à la base de données */
    $clients="id20720538_clients";
	$mdp="Karim@1991";
	$db="id20720538_hearbeauty";
	$server="localhost";
	
	
	$link=mysqli_connect($server,$clients,$mdp,$db);
	
	if($link)
	{
		//echo"connexion etabli";
	}
	else
	{
		die(mysqli_connect_error());
	}
?>