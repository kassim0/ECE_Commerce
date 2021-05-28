<?php

	session_start();
	if(isset($_POST["vendeur"])){
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "ece.shop0@gmail.com";
        $to = "kazzmimouloud@gmail.com";
        $subject = "Essai de PHP Mail";
        $message = "PHP Mail fonctionne parfaitement";
        $headers = "De :" . $from;
        mail($to,$subject,$message, $headers);
        echo "L'email a été envoyé.";
    }else{echo "aucun bouton touché";}

?>