<?php
	
	
	$civilites = array(
		"m" => "M." ,
		"mme" => "Mme." ,
		"mlle" => "Mlle."
	) ;
	
	
	$civilite = $_GET['civilite'] ;
	
	
	$niveaux = array(
		"d" => "Débutant" ,
		"m" => "Moyen" ,
		"b" => "Bon"
	) ;
	
	
	$niveau = $_GET['niveau'] ;

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
		
		<h3>Votre candidature</h3>
		<table>
			<tr>
				<td>Civilité</td>
				<td><?php echo $civilites[$civilite] ; ?></td>
			</tr>
		
			<tr>
				<td>Nom</td>
				<td><?php echo $_GET["nom"] ; ?></td>
			</tr>
			
			<tr>
				<td>Prénom</td>
				<td><?php echo $_GET["prenom"] ; ?></td>
			</tr>
		
			<tr>
				<td>Date de naissance</td>
				<td><?php echo $_GET["dateNaissance"] ; ?></td>
			</tr>
		
			<tr>
				<td>Téléphone</td>
				<td><?php echo $_GET["telephone"] ; ?></td>
			</tr>
		
		
			<tr>
				<td>Adresse életronique</td>
				<td><?php echo $_GET["email"] ; ?></td>
			</tr>
		
		
			<tr>
				<td>Niveau en PHP</td>
				<td><?php echo $niveaux[$niveau] ; ?></td>
			</tr>
		
		
			<tr>
				<td>Frameworks PHP</td>
				<td><ul><?php foreach( $_GET['framework'] as $unFramework ){ echo "<li>".$unFramework."</li>" ; }?></ul></td>
			</tr>

			<tr>
				<td>Moi</td>
				<td><?php echo $_GET["votreParcours"] ; ?></td>
			</tr>
		
		
		</table>
		
	</body>

</html>	
