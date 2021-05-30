<?php
	session_start();


	$nom=isset($_POST["nom"])? $_POST["nom"] : "";
	$prix=isset($_POST["prix"])? $_POST["prix"] : "";
	$photo=isset($_POST["photo"])? $_POST["photo"] : "";
	$categorie=isset($_POST["categorie"])? $_POST["categorie"] : "";
	$achat=isset($_POST["achat"])? $_POST["achat"] : "";
	$description=isset($_POST["description"])? $_POST["description"] : "";
	$id_vendeur=$_SESSION['ID'];


$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);


	if(isset($_POST["ajout"])){
		echo $id_vendeur;
		echo $_SESSION['ID'];
		if($db_found){
			if($nom!="" && $prix!="" && $photo!="" && $categorie!="" && $achat!="" && $description!=""){
				$sql="INSERT INTO articles(image,nom,prix,description,categorie,modedachat,id_vendeur) VALUES('$photo','$nom',$prix,'$description','$categorie','$achat',$id_vendeur)";
					$result = mysqli_query($db_handle, $sql);
					echo "article envoyé !";
					//echo $data['id'];



		}else{echo "Le formulaire n'est pas remplit";}

	}
}




// if(isset($_POST["supp"])){
// 	if($db_found){
// 		$sql="SELECT id FROM articles WHERE "
// 		$sql="DELETE FROM articles WHERE ";
// 	}
// }



?>