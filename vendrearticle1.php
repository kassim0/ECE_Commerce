<?php
	session_start();


	$nom=isset($_POST["nom"])? $_POST["nom"] : "";
	$prix=isset($_POST["prix"])? $_POST["prix"] : "";
	$photo=isset($_POST["photo"])? $_POST["photo"] : "";
	$categorie=isset($_POST["categorie"])? $_POST["categorie"] : "";
	$achat=isset($_POST["achat"])? $_POST["achat"] : "";
	$description=isset($_POST["description"])? $_POST["description"] : "";
	$id_supp=isset($_POST["id_utilisateur"])? $_POST["id_utilisateur"] : "";
	$id_vendeur=$_SESSION['ID'];
	//$date=date('Y-m-d H:i:s');


$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);


	if(isset($_POST["ajout"])){
		if($db_found){
			if($nom!="" && $prix!="" && $photo!="" && $categorie!="" && $achat!="" && $description!=""){
				$sql="INSERT INTO articles(image,nom,prix,description,categorie,modedachat,id_utilisateur) VALUES('$photo','$nom',$prix,'$description','$categorie','$achat',$id_vendeur)";
					$result = mysqli_query($db_handle, $sql);
					echo "article envoyé !";
					//echo $data['id'];



		}else{echo "Le formulaire n'est pas remplit";}

	}
}




if(isset($_POST["supp"])){
	if($db_found){
		//$sql="SELECT id FROM articles WHERE "
		$sql="DELETE FROM articles WHERE id_utilisateur=$id_vendeur AND image='$photo' AND nom='$nom' AND prix=$prix AND description='$description' ";
		$result = mysqli_query($db_handle, $sql);
		echo "Article supprimé";
	}
}


if(isset($_POST["suppvendeur"])){
	if($db_found){
		//$sql="SELECT id FROM articles WHERE "
		$sql="DELETE FROM vendeur WHERE id_utilisateur=$id_supp  ";
		$result = mysqli_query($db_handle, $sql);
		echo "Vendeur supprimé";
	}
}



?>