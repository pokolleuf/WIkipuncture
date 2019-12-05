<?php 
function register(){
	try
	{
			$bdd = new PDO('mysql:host=pokolleufbpico.mysql.db;dbname=pokolleufbpico;charset=utf8', 'pokolleufbpico', 'Mandela3364');
	}
	catch(Exception $e)

	{
					die('Erreur : '.$e->getMessage());
	}
	if(isset($_POST['email'])){
		
		$req = $bdd->prepare('SELECT id, pass FROM user WHERE email = :email');
		$req->execute(array(
				'email' => $_POST['email']));
		$resultat = $req->fetch();

		if (!$resultat) // Inscription possible
		{
			// Ajout de l'utilisateur dans la base de données
			$req = $bdd->prepare('INSERT INTO user(email, pass, nom, prenom, genre, situation) VALUES(:email, :pass, :nom, :prenom, :genre, :situation)');
			$req->execute(array(
      'email' => $_POST['email'],
			'pass' => md5("graindesel".$_POST['pass']),
			'nom' => $_POST['nom'],
			'prenom' => $_POST['prenom'],
			'genre' => $_POST['genre'],
			'situation' => $_POST['situation']));
			
			// Connexion de l'utilisateur
			$req = $bdd->prepare('SELECT id, nom, prenom, pass FROM user WHERE email = :email');
			$req->execute(array(
					'email' => $_POST['email']));
			$resultat = $req->fetch();
			
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
			$_SESSION['email'] = $_POST['email'];
			setcookie('email', $_POST['email'], time() + 30*24*3600, null, null, false, true);
			
			return "2"; // Inscription effectuée
		}
		else 
		{
			return "1"; // Mauvaise inscription
		}
	}
	return "0"; // Pas de tentative d'inscription
}
?>