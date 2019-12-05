<?php 
function connect(){
	if(isset($_SESSION['id'])){
		return "2"; // Utilisateur connecté
	}
	else{
		try
		{
				$bdd = new PDO('mysql:host=pokolleufbpico.mysql.db;dbname=pokolleufbpico;charset=utf8', 'pokolleufbpico', 'Mandela3364');
		}
		catch(Exception $e)

		{
						die('Erreur : '.$e->getMessage());
		}
		if(isset($_POST['email'])){
			
			$req = $bdd->prepare('SELECT id, nom, prenom, pass FROM user WHERE email = :email');
			$req->execute(array(
					'email' => $_POST['email']));
			$resultat = $req->fetch();

			$isPasswordCorrect = md5("graindesel".$_POST['pass'])==$resultat['pass'];

			if (!$resultat)
			{
					return "1"; // Mauvaise connexion
			}
			else
			{
					if ($isPasswordCorrect) {
							$_SESSION['id'] = $resultat['id'];
							$_SESSION['nom'] = $resultat['nom'];
							$_SESSION['prenom'] = $resultat['prenom'];
							$_SESSION['email'] = $_POST['email'];
							setcookie('email', $_POST['email'], time() + 30*24*3600, null, null, false, true); // Le cookie expire dans 1 mois
							header('Location: http://pokolleufb.cluster020.hosting.ovh.net');
							exit();
							return "2";
					}
					else {
							return "1"; // Mauvaise connexion
					}
			}
		}
		
		if(isset($_COOKIE['email'])){
			
			$req = $bdd->prepare('SELECT id, nom, prenom, pass FROM user WHERE email = :email');
			$req->execute(array(
					'email' => $_COOKIE['email']));
			$resultat = $req->fetch();

			$_SESSION['id'] = $resultat['id'];
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
			$_SESSION['email'] = $_COOKIE['email'];
			setcookie('email', $_COOKIE['email'], time() + 30*24*3600, null, null, false, true); // Le cookie expire dans 1 mois
			header('Location: http://pokolleufb.cluster020.hosting.ovh.net'); // UTILISATEUR CONNECTE
			exit();
			return "2";
		}
		return "0"; // Pas de tentative de connexion
	}
}
?>