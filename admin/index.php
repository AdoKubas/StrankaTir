<?php 
	include'assets/adminHeader.php';
	
	session_start();

	if (!$_SESSION) {
		include'assets/menu.php';
		include'prihlasenie.php';		
	}else{
		include'assets/menu_admin.php';
	}

	include'assets/footer.php';
 ?>