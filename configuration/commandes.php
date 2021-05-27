<?php

	function add($image, $nom, $prix, $description, $categorie, $modeachat)
	{
		if(require("connexion.php"))
		{
			$var=$access->prepare("INSERT INTO articles (image, nom, prix, desciption, categorie, mode dachat) VALUES($image, $nom, $prix, $description, $categorie, $modeachat)"); 
			$var->execute(array($image, $nom, $prix, $description, $categorie, $modeachat));
			$var->closeCursor();
		}
	}
	function afficher()
	{
		if(require("connexion.php"))
		{
			$var=$access->prepare("SELECT * FROM articles");
			$var->execute();
			$data = $var->fetchAll(PDO::FETCH_OBJ);

			return $data;
			$var->closeCursor(); 
		}
	}

	function supprimer($id)
	{
		if(require("connexion.php"))
		{
			$var=$access->prepare("DELETE FROM articles WHERE id=?");
			$var->execute(array($id));
			$var->closeCursor();
		}
	}

?>