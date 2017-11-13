<!doctype html>
<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<title>Mon premier formulaire</title>
	</head>
	<style>
		form {
			text-align: center;
		}
	</style>

	<body>
		<form action="miniChat_post.php" method="post">
			<p>
				<label for="userName">Pseudo</label> :
				<input type="text" name="userName" id="pseudo">
				<br>
				<label for="message">Message</label>:
				<input type="text" name="message" id="message">
				<input type="submit" value="Envoyer">
			</p>
		</form>
			<?php include_once 'mysql_functions.php';
				showMessage();
			?>
	</body>

</html>
