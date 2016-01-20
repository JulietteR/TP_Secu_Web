<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<section class="container listing">
	<h1>Liste des utilisateurs</h1>
		<?php
			require_once 'config.php';
			require_once 'fonction.php';

			$bdd = connectBDD($host, $database, $user, $password);

			$list = getUsers($bdd);

			while ($donnees = $list->fetch()){
				?> 
				<?php
				echo "<div>Pseudo de l'utilisateur : ".$donnees['username']."</div>";

				echo "</br>";
			}
?>
	</section>
</body>
</html>