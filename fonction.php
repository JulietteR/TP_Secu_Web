<?php
// Insérer un utilisateur en base
function addUser($username, $password){
	$req = $bdd->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');
	$req->execute(array(
		'username' => $username,
		'password' => $password,
		));
}

