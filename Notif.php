<?php


    session_start();

echo '<head>';
echo '<title>Notifications</title>';
echo "<meta charset=\"utf-8\">";
echo '<link rel="icon" href="favicon.ico" type="image/x-icon"/>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<link rel="stylesheet" type="text/css" href="firstpage.css">';
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Notifications.css\">";
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">';
echo  '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>';
echo  '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> ';
echo '</head>';


$database = "eceshop";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
echo '<body>';
echo '<nav class="navbar navbar-expand-md">';
echo		 '<a class="navbar-brand" href="index.php">';
echo		 	'<div class="b-logo swift_left">';
echo                        '<img src="logoShopECE.png" alt="ECE Store" class="img-fluid" width="150" height="200">';
echo            '</div>';
echo		 '</a>';
echo		 '<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">';
echo		 	'<span class="navbar-toggler-icon"></span>';
echo		 '</button>';
echo		 '<div class="collapse navbar-collapse" id="main-navigation">';
echo			 '<ul class="navbar-nav">';
echo				 '<li class="nav-item"><a class="nav-link" href="Acceuil.php">Accueil</a></li>';
echo				 '<li class="nav-item"><a class="nav-link" href="parcourir.php">Tout Parcourir</a></li>';
echo				 '<li class="nav-item"><a class="nav-link" href="Notif.php">Notifications</a></li>';
echo				 '<li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>';
echo				 '<li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>';
echo			 '</ul>';
echo		 '</div>';
echo 	'</nav>';



echo '<h1>Vos critères</h1>';
echo 	'<form method="post" action="Notif.php">';
echo 	'<table border="1">';
echo 	'<tr>';
echo		'<td>Que recherchez-vous ?:</td>';
echo		'<td>';
echo			'<input type="radio" name="choix" value="1">Meubles<br>';
echo			 '<input type="radio" name="choix" value="2">Ordinateurs<br>';
echo			 '<input type="radio" name="choix" value="3">Colliers<br>';
echo			 '<input type="radio" name="choix" value="4">Voitures<br>';
echo			 '<input type="radio" name="choix" value="5">Tableaux<br>';
echo			 '<input type="radio" name="choix" value="6">Cahier<br>';
echo			 '<input type="radio" name="choix" value="7">Montres<br>';
echo		'</td>';
echo	'</tr>';
echo	'<tr>';
echo		'<td colspan="2" align="center">';
echo			 '<input type="submit" name="button1" value="Soumettre">';
echo		'</td>';
echo	'</tr>';
echo	'</table>';
echo	'</form>';


$choice = isset($_POST["choix"])? $_POST["choix"] : "";
if (empty($choice)) {
	$choice = 0;
	}
$choice = (int)$choice;
$sql = "";

if ($db_found) {
	
	switch ($choice) {
		case 1:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%MEUBLE%'";
		break;
		case 2:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%ORDINATEUR%'";
		break;
		case 3:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%COLLIER%'";
		break;
		case 4:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%VOITURE%'";
		break;
		case 5:
		$sql = "SELECT * FROM articles WHERE nom LIKE 'T%'";
		break;
		case 6:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%CAHIER%'";
		break;
		case 7:
		$sql = "SELECT * FROM articles WHERE nom LIKE '%MONTRE%'";
		break;
		default:
		$sql = "SELECT * FROM articles";
		break;
}
echo "<h2>Voici votre sélection</h2>";

echo "<p> Résultat:</p>";
$result = mysqli_query($db_handle, $sql);

echo '<div class="container">';
echo '<div class="row">';
while ($data = mysqli_fetch_assoc($result)) {
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']). '" width = "100%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'  <button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         '<input type="hidden" name="idarticle" >';
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';

} else {
echo "<br>Votre produit n'est pas disponible, vous pouvez placer le boutton sur ON, pour activer les notifications qui vous informeront s'il est à nouveau disponible";
}

echo "<p class='okay'>Si votre produit n'est pas disponible, vous pouvez placer le boutton sur ON, pour activer les notifications qui vous informeront s'il est à nouveau disponible</p>";
echo '<center>';
echo '<label class="switch">';
echo   '<input type="checkbox">';
echo   '<span class="slider round"></span>';
echo '</label>';

echo '</center>';

echo '<footer class="page-footer">';
echo		 '<div class="container">';
echo			 '<div class="row">';
echo				 '<div class="col-lg-8 col-md-8 col-sm-12">';
				 	
echo				 '</div>';
echo				'</div>';
echo			 '<div class="footer-copyright text-center">Copyright &copy; 2021 ECE Store';
			 
echo		'</div>';
echo	'</footer>';
echo '</body>';


mysqli_close($db_handle);
?>
