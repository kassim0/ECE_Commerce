<?php

function add($image, $nom, $prix, $description, $categorie, $modeachat)
{
	if (require("connexion.php")) {
		$var = $access->prepare("INSERT INTO articles (image, nom, prix, desciption, categorie, mode dachat) VALUES($image, $nom, $prix, $description, $categorie, $modeachat)");
		$var->execute(array($image, $nom, $prix, $description, $categorie, $modeachat));
		$var->closeCursor();
	}
}

function addProductToCart($productId, $authenticatedPersonId)
{
	if (require("connexion.php")) {
		$stmt = $access->prepare("INSERT INTO panier (id_article, id_acheteur) VALUES(:productId, :authenticatedPersonId)");
		$stmt->bindParam(':authenticatedPersonId', $authenticatedPersonId);
		$stmt->bindParam(':productId', $productId);
		$stmt->execute();
		$stmt->closeCursor();
	}
}

function selectCartProductForUser($authenticatedPersonId)
{
	if (require("connexion.php")) {
		$var = $access->prepare("SELECT * FROM articles INNER JOIN panier ON articles.id = panier.id_article WHERE panier.id_acheteur = $authenticatedPersonId");
		$var->execute();
		$data = $var->fetchAll(PDO::FETCH_OBJ);
		$var->closeCursor();
		return $data;
	}
}

function removeProductFromCart($productId, $userId)
{
	if (require("connexion.php")) {
		$var = $access->prepare("DELETE FROM panier WHERE id_article = $productId AND id_acheteur = $userId");
		$var->execute();
		$data = $var->fetchAll(PDO::FETCH_OBJ);
		$var->closeCursor();
		return $data;
	}
}

function afficher()
{
	if (require("connexion.php")) {
		$var = $access->prepare("SELECT * FROM articles");
		$var->execute();
		$data = $var->fetchAll(PDO::FETCH_OBJ);
		$var->closeCursor();
		return $data;
	}
}

function supprimer($id)
{
	if (require("connexion.php")) {
		$var = $access->prepare("DELETE FROM articles WHERE id=?");
		$var->execute(array($id));
		$var->closeCursor();
	}
}
