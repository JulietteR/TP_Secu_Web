<?php

require_once 'config.php';
require_once 'fonction.php';

$login = $_POST["login"];
$password = $_POST["password"];
echo "<center> $login $password </center>";

echo $host . "a\n";

connectBDD($host, $database, $user, $password);

if (assert($login) && assert($password)){
	$password = hash("sha256", $password);
	echo $password;

	addUser($login, $password);
	echo "<center> Utilisateur enregistré</center>";
}



