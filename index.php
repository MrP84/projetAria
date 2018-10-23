<?php
	
try
{ //connection à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{ //récupération de l'erreur (fonction à créer)
        die('Erreur : '.$e->getMessage());
}
// recuperation des données
$don = $bdd->query('SELECT  FROM  ORDER BY  DESC');
// affichage des données
while ($donnees = $don->fetch())
{
    
}  
    $don->closeCursor();
?>	


