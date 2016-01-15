<?php

require_once 'config.php';
require_once 'fonction.php';

$login = $_POST["login"];
$mdp = $_POST["password"];
echo "<center> $login $mdp </center>";

echo "host: ".$host."\n";
echo "dbname: ".$database."\n";
echo "login: ".$user."\n";
echo "mdp: ".$password."\n";

connectBDD($host, $database, $user, $password);

if (assert($login) && assert($password)){
	$mdp = hash("sha256", $mdp);
	echo $mdp;

	addUser($login, $mdp);
	echo "<center> Utilisateur enregistré</center>";
}



