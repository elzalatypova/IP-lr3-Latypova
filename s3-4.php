<!DOCTYPE html>
<html lang="en">
	<h1>Латыпова Эльза</h1>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
</head>
<body>
	<a href="index.php">Главная</a>
		<FORM method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
		Введите Логин
		<INPUT type="text" name="a" size="3">
		

		<P> <INPUT type="submit" name="obr" value="Проверить">
	</FORM>
	<?
		if (isset($_POST["obr"])) {
			$s1 = $_POST["a"];
			$logitn = array("Elena", "Vika", "Elsa", "Dmitriy");
			$answer;
			for ($i=0; $i < count($logitn) ; $i++) { 
				if ($s1 == $logitn[$i]) {
					$answer = "Здравствуйте," . $logitn[$i];
					break;
				} else {
					$answer = "Вы не зарегестрированный пользователь";
				}
			}
			echo $answer;
	}
	?>
</body>
</html>
