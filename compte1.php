<?php

    session_start();

  ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="compte.css">
    <link rel="stylesheet" type="text/css" href="firstpage.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>Log-In Sing-Up</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- <script src="main.js"></script> -->
</head>
<body>

    <!-- Navibar -->
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
                 <li class="nav-item"><a class="nav-link" href="Notif.php">Notifications</a></li>
                 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>
                 <li class="nav-item"><a class="nav-link" href="index2.php">Votre Compte</a></li>
             </ul>
         </div>
    </nav>
    <!-- fin Navibar -->



<!-- <form method="post" action="inscription2.php"> -->
    <div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-height">
            <div class="row b-wrapper"> 
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 b-min-height">
                    <div class="b-logo swift_left">
                        <img src="logoShopECE.png" class="img-fluid">
                    </div>
                    <div class="b-title text-center">
                        <h1 class="user_title">Devenir vendeur</h1>
                        <button type="submit" name="vendeur" ><a href="attentevendeur1">Vendeur</a></button>
                        <!-- <button type="submit" name="vendeur" >Vendeur</button> -->
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="b-form text-center">
                        <div class="b-form-title">
                            <h1 class="user_title">Devenir acheteur</h1>
                        </div>
                            <button type="submit" name="acheteur" >Acheteur</button>
                    </div>
                </div> 

            </div>
        </div>
    </div>
</div>
<!-- </form> -->

<?php

    
?>


</body>
</html>
