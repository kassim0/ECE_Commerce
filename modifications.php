<?php
	session_start();

$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);


	if(isset($_POST["enregistre"])){
		if($db_found){
			if($nom!=''){
				$sql="SELECT nom FROM acheteur WHERE id_utilisateur='$_SESSION['ID']'";
				$result = mysqli_query($db_handle, $sql);
				while($data = mysqli_fetch_assoc($result)){
					$data['nom']=$nom;
				}
				echo "Nom modifié";
			}


		}else{echo "dossier introuvable";}


	}




?>