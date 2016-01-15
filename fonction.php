<?php

//Connexion bdd
function connectBDD($host, $database, $user, $password){
	 $arg1 = "mysql:host=$host;dbname=$database";
	// echo $arg1;
	 try {
		$bdd = new PDO($arg1, $user, $password);
	}catch (PDOException $e) {
    	print "Erreur !: " . $e->getMessage() . "<br/>";
   		die();
	}
	return $bdd;
}

// Insérer un utilisateur en base
function addUser($username, $password, $bdd){
	$req = $bdd->prepare('INSERT INTO users(username, password) VALUES( :username, :password)');
	$req->execute(array(
		'username' => $username,
		'password' => $password
		));
}

function getUsers($bdd){
	$req = $bdd->query('SELECT * FROM users');

	return $req;
}
