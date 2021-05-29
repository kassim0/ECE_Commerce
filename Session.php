 <?php
	 session_start();




    $ID=0;
	$nom=isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom=isset($_POST["prenom"])? $_POST["prenom"] : "";
	$pseudo=isset($_POST["pseudo"])? $_POST["pseudo"] : "";
	$email=isset($_POST["email"])? $_POST["email"] : "";
	$mdp=isset($_POST["mdp"])? $_POST["mdp"] : "";
	$adresse=isset($_POST["adresse"])? $_POST["adresse"] : "";
	$codepostal=isset($_POST["codepostal"])? $_POST["codepostal"] : "";
	$ville=isset($_POST["ville"])? $_POST["ville"] : "";
	$tel=isset($_POST["tel"])? $_POST["tel"] : "";
	$emailexist=0;
	$nb=0;
	$code=rand();

$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);



















	if(isset($_POST["inscription"])){
		if($db_found){
			if($nom!="" && $prenom!="" && $pseudo!="" && $email!="" && $mdp!=""){
				$sql="SELECT email FROM acheteur";
				$result = mysqli_query($db_handle, $sql);
				while($data = mysqli_fetch_assoc($result)){
					if($data['email']==$email){
						$emailexist=1;
					}
				}
				if($emailexist==0){
					$sql="INSERT INTO acheteur(nom,prenom,email,adresse,codepostal,ville,telephone,pseudo,mdp,pdp) VALUES ('$nom','$prenom','$email','',0,'',0,'$pseudo','$mdp',0)";
					$result = mysqli_query($db_handle, $sql);
					//echo "regarde la BDD<br>";
					 echo "Inscription reussie, <br>cliquez "."<a href='compte1.php'>"."ici"."</a>"." pour choisir votre compte<br>";
					 $sql="SELECT id_utilisateur FROM acheteur WHERE email='$email' AND mdp='$mdp' ";
					 $result = mysqli_query($db_handle, $sql);
					 while($data = mysqli_fetch_assoc($result)){
					 echo "De plus votre ID est ".$data['id_utilisateur']."<br>";
					 $ID=$data['id_utilisateur'];
					 echo "Et dans le variable on a $ID";
					}
				}else{echo "email deja existant<br>";}
			}else{echo "le formulaire n'est pas remplie<br>";}
		}else{echo "fichier introuvable<br>";}

	}










		if(isset($_POST["connexion"])){		
		if($db_found){
			$sql="SELECT email,mdp FROM acheteur";
			$result = mysqli_query($db_handle, $sql);
			while($data = mysqli_fetch_assoc($result)){
				if($data['email']==$email){
					if($data['mdp']==$mdp){
						$nb=1;
					}
				}
			}
		}else{echo "Fichier introuvable";}
		if($nb==0){
		echo "Email ou mot de passe invalide<br>";
		 echo "<a href='connexion.html'>"."retourner à la page de connexion"."</a>";
		//echo "retourner à la page de connexion";
		}
		else{
			echo "connexion réussie<br>";
			 echo "Cliquez "."<a href='votrecompte.php'>"."ici"."</a>"." pour accéder à votre compte";
	}


	}



	if(isset($_POST["enregistre"])){
		echo "le bouton à été appuyé";
		

	}






	$_SESSION['email']=$email;
    $_SESSION['mdp']=$mdp;
    if($db_found){
    	if($email!='' || $mdp!=''){
    	$sql="SELECT id_utilisateur, nom, prenom, pseudo, adresse, codepostal, ville, telephone FROM acheteur WHERE email='$email' AND mdp='$mdp'";
    	$result = mysqli_query($db_handle, $sql);
    	while($data = mysqli_fetch_assoc($result)){
    		$_SESSION['nom']=$data['nom'];
    		$_SESSION['prenom']=$data['prenom'];
    		$_SESSION['pseudo']=$data['pseudo'];
    		$_SESSION['ID']=$data['id_utilisateur'];
    		$_SESSION['adresse']=$data['adresse'];
    		$_SESSION['codepostal']=$data['codepostal'];
    		$_SESSION['ville']=$data['ville'];
    		$_SESSION['tel']=$data['telephone'];

    	}
    }
    }
	


?>