<?php

session_start();


//on enrengistre les données dans des variables
	//$nom=isset($_POST["nom"])? $_POST["nom"] : "";
	//$prenom=isset($_POST["prenom"])? $_POST["prenom"] : "";
	//$pseudo=isset($_POST["pseudo"])? $_POST["pseudo"] : "";
	$email=isset($_POST["email"])? $_POST["email"] : "";
	$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "";
	// $adresse=isset($_POST["adresse"])? $_POST["adresse"] : "";
	// $codepostal=isset($_POST["codepostal"])? $_POST["codepostal"] : "";
	// $ville=isset($_POST["ville"])? $_POST["ville"] : "";
	// $tel=isset($_POST["tel"])? $_POST["tel"] : "";
	$emailexist=0;
	$nb=0;




	$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);

		if(isset($_POST["signup"])){
	
		
		//echo $nb."<br>";
		if($db_found){
			//echo "fichier trouvé<br>";
			$sql="SELECT email,mdp FROM acheteur";
			$result = mysqli_query($db_handle, $sql);
			while($data = mysqli_fetch_assoc($result)){

				if($data['email']==$email){
					//echo "Email valide<br>";

					if($data['mdp']==$mdp){
						//echo "mot de passe valide<br>";
						$nb=1;


					}//else{echo "mot de passe invalide<br>";}

				}//else{echo "Email invalide<br>";}

			}



		}//else{echo "fichier introuvable<br>";}



	}//else{echo "bouton sign IN non appuyé<br>";}
	if($nb==0){
		echo "Email ou mot de passe invalide<br>";
		 echo "<a href='connexion.html'>"."retourner à la page de connexion"."</a>";
		//echo "retourner à la page de connexion";
	}
	else{
		echo "connexion réussie<br>";
		 echo "Cliquez "."<a href='compte.html'>"."ici"."</a>"." pour accéder à votre compte";
	}
