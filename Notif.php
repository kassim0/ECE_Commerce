<?php
echo "<meta charset=\"utf-8\">";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Notifications.css\">";
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">';
echo  '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>';
echo  '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> ';

$database = "eceshop";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

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
echo "<br>Votre produits n'est pas disponible, vous pouvez activer la cloche de notification qui vous informera s'il est à nouveau disponible";
}



mysqli_close($db_handle);
?>
