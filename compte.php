<?php
	session_start();
	$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);

	 $id=$_SESSION['ID'];
	 $prenom=$_SESSION['prenom'];
	 $nom=$_SESSION['nom'];
	 $pseudo=$_SESSION['pseudo'];
	 $email=$_SESSION['email'];
	 $mdp= $_SESSION['mdp'];







	$code=isset($_POST["code"])? $_POST["code"] : "";
	$verif=0;
	

	if($db_found){
		$sql="SELECT code FROM code";
		$result = mysqli_query($db_handle, $sql);
		while($data = mysqli_fetch_assoc($result)){
	 		   if($code==$data['code']){
	 		   	$verif=1;

	 		   }//else{echo"le code est érroné<br>";}

	 	}

	 		   if($verif==1){
	 		   	$sql="INSERT INTO vendeur(nom,prenom,email,adresse,codepostal,ville,telephone,pseudo,mdp,pdp) VALUES ('$nom','$prenom','$email','',0,'',0,'$pseudo','$mdp',0)";
	 		   	$result = mysqli_query($db_handle, $sql);
	 		   	 echo "Inscription reussie, <br>cliquez "."<a href='connexion1.php'>"."ici"."</a>"." pour vous connectez<br>";


	 		   	 $sql="DELETE FROM acheteur WHERE id_utilisateur = $id";
	 		   	 $result = mysqli_query($db_handle, $sql);

	 		   	 $sql="SELECT id FROM vendeur WHERE email='$email' AND mdp='$mdp'";
	 		   	 $result = mysqli_query($db_handle, $sql);
	 		   	 	$_SESSION['ID']=$data['id'];
	 		   	 


	 		   }else{echo "le code est érroné.<br>";}

	    }

	



?>