<?php 

	function kontrola($polozka){

		$polozka = trim($polozka);
		$polozka = htmlspecialchars($polozka);
		return $polozka;

	}

	date_default_timezone_set("Europe/Bratislava");
	if( trim($_POST['odpoved']) == $_POST['spravnaOdpoved'] ){ 

		$suborPrispevky = fopen('prispevky.csv', 'a');

		$novyPrispevok[] = $_GET['pocet'] + 1; 
		$novyPrispevok[] = kontrola($_POST['name']); 
		$novyPrispevok[] = kontrola($_POST['content']);
		$novyPrispevok[] = date('Y-m-d H:i:s', time() ); 

		//var_dump($novyPrispevok);

		fputcsv($suborPrispevky, $novyPrispevok, ';');
		fclose($suborPrispevky);

	}

	header("Location:index.php");
