<?php 

	if ($_SESSION["user"]) {
		echo 'ahoj si prihlásený<br>';
	}else{
		header('Location: ../index.php');
	}

 ?>