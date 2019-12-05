<?php 

require("connect.php");
require("register.php");
require("search.php");
require("supersearch.php");
require("rss.php");
require("deconnect.php");

session_start();

require("smarty/Smarty.class.php");

$smarty = new Smarty();
$smarty->display("tpl/head.tpl");

if(!isset($_GET['page'])){ // PAGE PAR DEFAUT
	$connect=connect();
	if($connect=="0"){
		$smarty->display("tpl/home.tpl");  // ACCUEIL PAR DEFAUT
	}
	elseif($connect=="1"){
		$smarty->assign("commentaire","Mauvais identifiant ou mot de passe !"); // MAUVAISE CONNEXION
		$smarty->display("tpl/connexion.tpl");
	}
	elseif($connect=="2"){
		$news=news_rss();
		$smarty->assign("identifiant",$_SESSION['prenom']." ".$_SESSION['nom']);  // ACCUEIL UTILISATEUR CONNECTE
		$smarty->assign("news",$news);
		$smarty->display("tpl/home_premium.tpl");
	}
}

elseif((isset($_GET['page']) and ($_GET['page']=="connexion"))){ // PAGE DE CONNEXION
	$connect=connect();
	if($connect=="0"){
		$smarty->assign("commentaire","");  // CONNEXION
		$smarty->display("tpl/connexion.tpl");
	}
	elseif($connect=="1"){
		$smarty->assign("commentaire","Mauvais identifiant ou mot de passe !"); // MAUVAISE CONNEXION
		$smarty->display("tpl/connexion.tpl");
	}
	elseif($connect=="2"){
		header('Location: http://pokolleufb.cluster020.hosting.ovh.net'); // UTILISATEUR CONNECTE
		exit();
	}
}

elseif(isset($_GET['page']) and ($_GET['page']=="inscription")){ // PAGE D' INSCRIPTION
	$register=register();
	if($register=="0"){
		$smarty->assign("commentaire","");  // INSCRIPTION
		$smarty->display("tpl/inscription.tpl");
	}
	elseif($register=="1"){
		$smarty->assign("commentaire","Cette adresse e-mail est déjà utilisée !"); // MAUVAISE INSCRIPTION
		$smarty->display("tpl/inscription.tpl");
	}
	elseif($register=="2"){
		header('Location: http://pokolleufb.cluster020.hosting.ovh.net'); // UTILISATEUR INSCRIT
		exit();
	}
}

elseif(isset($_GET['page']) and ($_GET['page']=="recherche")){  // PAGE DE RECHERCHE SIMPLE
	$connect=connect();
	if($connect=="0"){
		if(isset($_GET['q'])){
			$resultat=recherche();  // RECHERCHE PAR DEFAUT AVEC RESULTATS
			$smarty->assign("autofill",$_GET['q']);
			$smarty->assign("resultat",$resultat);
			$smarty->display("tpl/recherche.tpl");
		}
		else{
			$smarty->assign("autofill","");  // RECHERCHE PAR DEFAUT
			$smarty->assign("resultat","");
			$smarty->display("tpl/recherche.tpl");
		}
	}
	elseif($connect=="1"){
		if(isset($_GET['q'])){
			$resultat=recherche();  // RECHERCHE PAR DEFAUT AVEC RESULTATS
			$smarty->assign("autofill",$_GET['q']);
			$smarty->assign("resultat",$resultat);
			$smarty->display("tpl/recherche.tpl");
		}
		else{
			$smarty->assign("autofill","");  // RECHERCHE PAR DEFAUT
			$smarty->assign("resultat","");
			$smarty->display("tpl/recherche.tpl");
		}
	}
	elseif($connect=="2"){
		if(isset($_GET['q'])){
			$resultat=recherche(); // RECHERCHE UTILISATEUR CONNECTE AVEC RESULTATS
			$smarty->assign("identifiant",$_SESSION['prenom']." ".$_SESSION['nom']);
			$smarty->assign("autofill",$_GET['q']);
			$smarty->assign("resultat",$resultat);
			$smarty->display("tpl/recherche_premium.tpl");
		}
		else{
			$smarty->assign("identifiant",$_SESSION['prenom']." ".$_SESSION['nom']);  // RECHERCHE UTILISATEUR CONNECTE
			$smarty->assign("autofill","");
			$smarty->assign("resultat","");
			$smarty->display("tpl/recherche_premium.tpl");
		}
	}
}

elseif(isset($_GET['page']) and ($_GET['page']=="symptome")){  // PAGE DE RECHERCHE PAR DESCRIPTION DES SYMPTOMES
	$connect=connect();
	if($connect=="0"){
		header('Location: http://pokolleufb.cluster020.hosting.ovh.net'); // INTERDIT AUX MEMBRES NON CONNECTES
	  exit();
	}
	elseif($connect=="1"){
		header('Location: http://pokolleufb.cluster020.hosting.ovh.net'); // INTERDIT AUX MEMBRES NON CONNECTES
	  exit();
	}
	elseif($connect=="2"){
		if(isset($_GET['q'])){
			$resultat=recherche_s(); // RECHERCHE UTILISATEUR CONNECTE AVEC RESULTATS
			$smarty->assign("identifiant",$_SESSION['prenom']." ".$_SESSION['nom']);
			$smarty->assign("autofill",$_GET['q']);
			$smarty->assign("resultat",$resultat);
			$smarty->display("tpl/recherche_s.tpl");
		}
		else{
			$smarty->assign("identifiant",$_SESSION['prenom']." ".$_SESSION['nom']);  // RECHERCHE UTILISATEUR CONNECTE
			$smarty->assign("autofill","");
			$smarty->assign("resultat","");
			$smarty->display("tpl/recherche_s.tpl");
		}
	}
}

elseif(isset($_GET['page']) and ($_GET['page']=="deconnexion")){ // PAGE DE DECONNEXION
	deconnect();
	header('Location: http://pokolleufb.cluster020.hosting.ovh.net');
	exit();
}

$smarty->display("tpl/footer.tpl");
?>