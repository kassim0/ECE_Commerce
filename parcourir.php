
<!DOCTYPE html>
<html>
<head>
	<title>Tout Parcourir</title>
	<meta charset="utf-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="parcourir.css">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
</head>
<body>
	<nav class="navbar navbar-expand-md">
		 <a class="navbar-brand" href="index.php">
		 	<div class="b-logo swift_left">
                        <img src="logoShopECE.png" alt="ECE Store" class="img-fluid" width="150" height="200">
            </div>
		 </a>
		 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
		 	<span class="navbar-toggler-icon"></span>
		 </button>
		 <div class="collapse navbar-collapse" id="main-navigation">
			 <ul class="navbar-nav">
				 <li class="nav-item"><a class="nav-link" href="Acceuil.php">Accueil</a></li>
				 <li class="nav-item"><a class="nav-link" href="parcourir.php">Tout Parcourir</a></li>
				 <li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
				 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
				 <li class="nav-item"><a class="nav-link" href="index.html">Votre Compte</a></li>
			 </ul>
		 </div>
 	</nav>

 		  <h2 id="t">Tous les articles</h2>
			<div id="myBtnContainer">
			 
			  <form action="parcourir.php" method="post">
			  	 <button class="btn active" name="toutVoir" >Tout voir</button>
			  	 <button class="btn" name="meilleur"> Meilleur Offre</button>
				 <button class="btn" name="transaction"> Transaction client-vendeur</button>
			 	 <button class="btn" name="achat"> Achat immédiat</button>
			 	 <button class="btn" name="meubles"> Meubles et objets d'art</button>
			 	  <button class="btn" name="accessoire"> Accessoire VIP</button>
			 	  <button class="btn" name="materiels"> Matériels scolaires</button>
			 	  <button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>
				<input type='hidden' name='idarticle' >
				
			</form>
			 
			</div>
 
			
<!---------------PHP--------------------------------->


	
<?php


$database = "eceshop";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if (isset($_POST["toutVoir"])) {
if ($db_found) {
$sql = "SELECT * FROM articles";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         '<input type="hidden" name="idarticle" >';
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["meilleur"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.modedachat = 'enchere'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["transaction"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.modedachat = 'negociation'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["achat"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.modedachat = 'payementimmediat'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["meubles"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'meuble'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["accessoire"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'accessoireVIP'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}

if (isset($_POST["materiels"])) {
if ($db_found) {
$sql = "SELECT * FROM articles WHERE articles.categorie = 'materielscolaire'";

$result = mysqli_query($db_handle, $sql);


if (mysqli_num_rows($result) == 0) {
} else {

echo '<div class="container">';
echo '<div class="row">';

while ($data = mysqli_fetch_assoc($result)) {
 
echo	'<div class="col-lg-4">';	
echo		'<div class="content">';
echo			'<a class="article" href="pageArticle.php">';
echo		 	'<img src = "data:image/jpd;base64,' . base64_encode($data['image']) . '" width = "75%"/>';
echo           '</a>';
echo		 '<h5>'.$data['nom'].'</h5>';
echo		$data['prix'].'€';
echo 		'<button type="submit" name="add" class="btn btn-danger my-3">Ajouter au panier <i class="fas fa-shopping-cart"></i></button>';
echo         "<input type='hidden' name='idarticle' >";
		
echo		'</div>';
echo	'</div>';


}
echo 	'</div>';
echo'</div>';
}
} else {
echo "Database not found";
}
}


if (isset($_POST["add"])) {
if ($db_found) {

$sql = "SELECT id,nom,image,prix FROM articles WHERE articles.id ='idarticle' ";

//on ajoute 
$sql = "INSERT INTO panier(idarticle, nom, image,prix)
 VALUES('$id', '$nom', '$image', '$prix')"; 
$result = mysqli_query($db_handle, $sql);
echo "Add successful. <br>";
//on affiche le nouveau livre ajouté
// $sql = "SELECT * FROM panier";

// $result = mysqli_query($db_handle, $sql);
// echo "<h4>Informations sur le nouveau livre ajouté:</h4>";
// echo "<table border='1'>";
// echo "<tr>";
// echo "<th>" . "ID" . "</th>";
// echo "<th>" . "Titre" . "</th>";
// echo "<th>" . "Auteur" . "</th>";
// echo "<th>" . "Ann&eacute;e" . "</th>";
// echo "<th>" . "Editeur" . "</th>";
// echo "<th>" . "Couverture" . "</th>";
// echo "</tr>";
// while ($data = mysqli_fetch_assoc($result)) {
// echo "<tr>";
// echo "<td>" . $data['ID'] . "</td>";
// echo "<td>" . $data['Titre'] . "</td>";
// echo "<td>" . $data['Auteur'] . "</td>";
// echo "<td>" . $data['Annee'] . "</td>";
// echo "<td>" . $data['Editeur'] . "</td>";
// $image = $data['Couverture'];
// echo "<td>" . "<img src='$image' height='120' width='100'>" . 
// "</td>";
// echo "</tr>";
// }
// echo "</table>";

} else {
echo "Database not found. <br>";
}
}




mysqli_close($db_handle);
?>



 	<footer class="page-footer">
		 <div class="container">
			 <div class="row">
				 <div class="col-lg-8 col-md-8 col-sm-12">
				 	
				 </div>
				</div>
			 <div class="footer-copyright text-center">Copyright &copy; 2021 ECE Store
			 
		</div>
	</footer>
	

<script src="parcourir.js"></script>
</body>
</html>