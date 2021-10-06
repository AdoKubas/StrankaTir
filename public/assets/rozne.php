<?php 

	$mesiace=array("Január","Február","Marec","Apríl","Máj","Jún","Júl","September","Oktober","November","December");

	$bbcode = $htmlcode = "";

	function kontrola($polozka){

		$polozka = trim($polozka);
		$polozka = htmlspecialchars($polozka);
		return $polozka;

	}

	function prelozBBCode($text){

		$bbcode = array(
			'~\[b\](.*?)\[/b\]~s',
			'~\[i\](.*?)\[/i\]~s',
			'~\[u\](.*?)\[/u\]~s',
			'~\[url\]((?:ftp|https?)://.*?)\[/url\]~s'

		);
		$htmlcode = array (
			'<b>$1</b>',
			'<em>$1</em>',
			'<u>$1</u>',
			'<a href = "$1"> $1 </a>'		
		);
		return preg_replace($bbcode, $htmlcode, $text);
	}

	
?>