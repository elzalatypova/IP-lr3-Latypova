<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Латыпова Эльза</title>
</head>
<body>
<?php 
if (isset($_GET["obr"])) {
	$mass = mb_str_split($_GET["prhase"]);
	$symbol = $_GET["symbol"];
	$sumSymbol = 0;
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $symbol) {
			$sumSymbol++;
		}
	}
	header("Content-type: text/html; charset=utf-8");
	echo "Количество повторений = " . $sumSymbol;
}
	


// подсчет символов
if (isset($_POST["secondButton"])) {
	$mass = mb_str_split($_POST["prhase2"]);
	$firstSymbol = $_POST["firstSymbol"];
	$secondSymbol = $_POST["secondSymbol"];
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == $firstSymbol) {
			$mass[$i] = $secondSymbol;
		}
	}

	foreach ($mass as $value) {
		echo "$value";
	}
}

if (isset($_POST["thirdButton"])) {
	$mass = mb_str_split($_POST["prhase3"]);
	$CountSentence = 0;
	for ($i=0; $i < count($mass) ; $i++) { 
		if ($mass[$i] == "." or $mass[$i] == "!" or $mass[$i] == "?" or $mass[$i] == "...") {
			$CountSentence++;
		}
	}
	echo "Количество предложений = ". $CountSentence;
}

	
 ?>
 </body>
</html>