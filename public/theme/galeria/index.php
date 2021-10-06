<?php 
include'../../assets/header.php';
include'../../assets/menu.php';

	$imageAll = glob('*', GLOB_ONLYDIR);
	$idGallery = isset($_GET['id'])? $_GET['id'] : '0';
	$imageTitle = file_get_contents($imageAll[$idGallery] . '/header.txt');
	$imageDescription = file_get_contents($imageAll[$idGallery] . '/description.txt');
	$image = $imageAll[$idGallery] . '/thumb.jpg';

	foreach ($imageAll as $filename) {
    	$imagesTitle[] = file_get_contents($filename . '/' . basename($filename) .'.txt');  		
	}
 ?>
<section>
	<div class="row pt-5">
		<div class="col-2">
			<nav class="nav flex-column nav-pills nav-fill">
				<?php 
					foreach ($imagesTitle as $id => $value) {
						echo '<a href="?id='.$id.'&pc='.$id.'" class="nav-link '.($idGallery == $id ?  "active" : "" ).'">'.$value.'</a>';
					}				
				 ?>	
			</nav>					
		</div>	
		<div class="col-10">
			<h2 class="py-3 text-center"><?=  $imageTitle ?></h2>
			<div class="d-flex">
				<img src="<?=  $image ?>" alt="" class="" width="150">
				<div class="p-3"><?=  $imageDescription ?></div>
			</div>
			<hr>
			<?php
				$images = glob($imageAll[$idGallery].'/*_zmensena.jpg');
				foreach ($images as $image) {
					echo '<img class="p-3" src="' .$image. '" width="300">';
				}
			 ?>			
		</div>
	</div>
</section>

<?php 
include'../../assets/footer.php';