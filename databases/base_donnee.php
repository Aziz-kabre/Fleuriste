<?php 

$con=new PDO('mysql:host=localhost;dbname=','root','');

 if ($con) 
 {
 	$bd = $req = $con->query('CREATE DATABASE fleuriste');

 	if ($bd) 
 	{
 		$con=new PDO('mysql:host=localhost;dbname=fleuriste','root','');
 		
 		if ($con) {


 				$produit = $con->query('CREATE TABLE produit(numero_produit int(11) primary key auto_increment, titre_produit not null varchar(200), description text, prix_unitaire not null int(10),photo not null varchar(200),date_ajout date,titre_categorie not null varchar(250),foreign key(titre_categorie) references categorie(titre_categorie))');

 				$categorie = $con->query('CREATE TABLE categorie(numero_categorie int(11) primary key auto_increment, titre_categorie not null varchar(250) unique key, nombre_produit int(10))');

 				$client = $con->query('CREATE TABLE client(numero_client int(11) primary key auto_increment,nom not null varchar(200), prenom not null varchar(200), telephone not null int(10) unique key, pays not null varchar(200), ville not null varchar(200), adresse not null varchar(200) )');

 				$commande = $con->query('CREATE TABLE commande(numero_commande int(11) unique
 				 key auto_increment,numero_client int(11),numero_produit int(11), (numero_produit,numero_client)primary key)');




 				if (!empty($produit) and !empty($client) and !empty($categorie) and !empty($commande ))
 			 {
 				echo "Table Creer";
 			}
 			else{
 				echo "Table non creer";
 			}
 		}

 		else{
 			echo "Base de données non disponible";
 		}
 	}
 }









 ?>