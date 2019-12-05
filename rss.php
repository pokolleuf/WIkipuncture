<?php
// Lecture d'un fichier XML
function lit_rss($fichier,$champs) {
	 //Lecture du fichier
	 if($chaine = @implode("",@file($fichier))) {
		$tmp = preg_split("/<\/?"."item".">/",$chaine);
		// pour chaque <item>
		for($i=1;$i<sizeof($tmp)-1;$i+=2)
		 // on lit les champs demandés <champ>
		 foreach($champs as $champ) {
			$tmp2 = preg_split("/<\/?".$champ.">/",$tmp[$i]);
			// on ajoute au tableau
			$tmp3[$i-1][] = @$tmp2[1];
		 }
	return $tmp3; //return le tableau
	 }
}

function news_rss() {
	$rss = lit_rss("news.xml",array("title","link","description","pubDate",));
	$chaine='';
	//Affichage des difféentes news depuis le fichier XML
	foreach($rss as $tab) {
		$chaine = $chaine.'<br>';
		$chaine = $chaine.'<div class="news_box">
				 <div class="news_box_title">'.$tab[0].'</div>
				 <div class="news_box_date">posté le '.date("d/m/Y",strtotime($tab[3])).'</div>
				 '.$tab[2].' <a href="'.$tab[1].'">Lire tout l\'article</a>
			</div>';
	}
	return $chaine;
}
?>