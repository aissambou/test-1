<!DOCTYPE html>

 <!-- page affiche la liste des clients -->

<html lang="fr">

    <head>
        <title>liste clients</title>
    </head> 
	
	<style>
	    
		body{
			    width : 50%;
				margin : auto
		    }
			
		table{
			    border-collapse : collapse;
				margin : 25px 0;
				padding : 5px;
				font-size : 0.9em;
				font-family : sans-serif;
				box-shadow : 0 0 20px rgba(0,0,0,0.15);
		     }	
			 
		td,th{
			    
				padding : 10px;
				text-align : center;
		     }

        thead{
			    padding : 30px;
		     }	
			 
		tbody tr{
			        border-bottom : 1px solid #dddddd;  
		        }
        thead tr, tfoot tr{
			        background-color : #009879;
			        color : #ffffff;
			        text-align : center;
		        }				

        tbody{
			   font-weight : bold;
			   color : #009879;
		     }			 
			 
		tbody tr:nth-of-type(even){
			                        background-color : #f3f3f3;
		                          }	 
								  
		input[type="submit"]{
			                    width : 8em;
								background-color : #4caf50;
								border : none;
								border-radius : 3px;
								color : white;
								padding : 6px;
								text-align : center;
								font-weight : blod;
								margin : 5px;
		                    }
	</style>
	
    <body>
	    
		<h1>liste des clients</h1>
		
	    <table>
		
		<thead>
		
	    <tr>
		    <th>identifiant</th>
			<th>nom</th>
			<th>prenom</th>
			<th>telephone</th>
			<th>email</th>
			<th>adresse</th>
			<th>action</th>
            			
		</tr>
		
		</thead>
		
		<?php
		
		    include "connexion.php";
			$req=mysqli_query($link,"select * from clients");
			
		while($res=mysqli_fetch_array($req))
	    {
					
				
			
		?>
		
		<tbody>
		
		<tr>
		    <td><?php echo $res["id"];?></td>
			<td><?php echo $res["nom"];?></td>
			<td><?php echo $res["prenom"];?></td>
			<td><?php echo $res["tel"];?></td>
			<td><?php echo $res["email"];?></td>
			<td><?php echo $res["adresse"];?></td>
			
			<td>
			    <form action="afficher.php" method="POST">
				    <input type="hidden" name="id" value="<?php echo $res["id"];?>"/>
					<input type="submit" value="Détail"/>
				</form>
				
				<form action="Supprimer.php" method="post">
				    <input type="hidden" name="id" value="<?php echo $res["id"];?>"/>
					<input type="submit" value="Supprimer"/>
				</form>
				
				
			</td>
			
		</tr>
		
		</tbody>
		
		<?php
		}
		?>
		
		<tfoot>
		    <tr>
			    <td colspan="7">
				    
					
					   liste des clients inscrits
					 
				    
				</td>
			</tr>	
		</tfoot>	
		
		</table>
		
    </body>
	
</html>