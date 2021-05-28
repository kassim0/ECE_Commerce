<?php

	$database="eceshop";
	$db_handle=mysqli_connect('localhost',"root",'');
	$db_found= mysqli_select_db($db_handle, $database);

	$code=rand();
	


if(isset($_POST['signin'])){

echo $code;



}//else isset signin




?>