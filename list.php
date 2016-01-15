<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<section class="container">
		<?php
			require_once 'config.php';
			require_once 'fonction.php';

			$bdd = connectBDD($host, $database, $user, $password);

			$list = getUsers($bdd);

			while ($donnees = $list->fetch()){
				echo $donnees['username']; 
				echo "</br>";
			}
?>
	</section>
</body>
</html>