<?php 
include'../../assets/header.php';
include'../../assets/menu.php';
?>

<section>
<?php 

	$clanky = file('clanky.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  
	foreach ($clanky as $clanok) {
        list($title,$image,$content) = explode('::', $clanok);

?>    
    
    <h1><?= $title ?></h1>
	<img src="images/<?= $image ?>" alt="<?= $image ?>">
	<p><?= $content ?></p>
<?php 
	
		}

?>


	


</section>

<?php 
include'../../assets/footer.php';
?>