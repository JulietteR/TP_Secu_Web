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
		<div class="login">
			<h1>Se connecter à l'application</h1>

			<form method="post" action="recup.php">
				<p><input type="text" name="login" value="" placeholder="Username or Email"></p>
				<p><input type="password" name="password" value="" placeholder="Password"></p>
				<p class="remember_me">
					<label>
						<input type="checkbox" name="remember_me" id="remember_me">
						Se souvenir de moi
					</label>
				</p>
				<p class="submit"><input type="submit" name="commit" value="Login"></p>
			</form>
		</div>

		<div class="login-help">
			<p>Mot de passe oublié ? <a href="reset.html">Regénérer</a>.</p>
		</div>
	</section>
</section>
</body>
</html>