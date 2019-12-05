<?php 
function recherche_s(){
	try
	{
			$bdd = new PDO('mysql:host=pokolleufbpico.mysql.db;dbname=pokolleufbpico;charset=utf8', 'pokolleufbpico', 'Mandela3364');
	}
	catch(Exception $e)

	{
					die('Erreur : '.$e->getMessage());
	}
		
		// UNE SEULE REQUETE pour toute la recherche
		$sql = 'SELECT p.idP, p.mer, p.type, p.desc, s.desc FROM patho p
						JOIN symptPatho sp ON sp.idP = p.idP
						JOIN symptome s ON s.idS = sp.idS
            JOIN keySympt ks ON ks.idS = s.idS
            JOIN keywords k ON k.idK = ks.idK
            WHERE ';
						
		$keys = explode(" ", $_GET['q']);
		
		$firstkey = array_shift($keys);
		if($firstkey!=""){
			$sql = $sql.'k.name = \''.$firstkey.'\' ';
		}
		else{
			$sql = $sql.'0 ';
		}
		
		foreach($keys as $k){
			$sql = $sql.'AND k.name = \''.$k.'\' ';
		}

		$sql = $sql.'ORDER BY p.idP';
		
		$req = $bdd->prepare($sql);
		$req->execute();
		$results = $req->fetchAll();
		
		// On s'en va si la recherche n'aboutit n'a pas de résultat
		if(empty($results)){
			return '<h3 class="mt-3">Aucun résultat...</h3>';
		}
		else{
			$currentPatho = 0;
		}

			$chaine = '<div class="h4 mt-4 mb-2">Résultats de la recherche</div>';
			$chaine = $chaine.'<div class="">';
			$chaine = $chaine.'<div class="">';
			
			// On regroupe les résultats par pathologie
			foreach ($results as $result) {
					if($result['idP'] != $currentPatho){
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'<div class="card card-body">';
						$chaine = $chaine.'<div class="container mx-2 pb-3">';
						$chaine = $chaine.'<div class="h5 mt-1">';
						$chaine = $chaine.ucfirst($result['3']); // On capitalise la première lettre de la pathologie (plus joli)
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'<div class="row">';
						$chaine = $chaine.'<div class="col list-inline">';
						$chaine = $chaine.'<div class="list-inline-item">Type :</div>';
						$chaine = $chaine.'<div class="list-inline-item"><strong>';
						
						if (preg_match("#^mv#", $result['type']))
						{
							$chaine = $chaine.'Merveilleux Vaisseaux';
						}
						elseif (preg_match("#^m#", $result['type']))
						{
							$chaine = $chaine.'Méridien';
						}
						elseif (preg_match("#^tf#", $result['type']))
						{
							$chaine = $chaine.'Organe-Viscère (tsang/fu)';
						}
						elseif (preg_match("#^j#", $result['type']))
						{
							$chaine = $chaine.'Tendino-musculaire (jing jin)';
						}
						elseif (preg_match("#^l#", $result['type']))
						{
							$chaine = $chaine.'Branches (voies luo)';
						}
						
						$chaine = $chaine.'</strong></div>';
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'<div class="col list-inline">';
						$chaine = $chaine.'<div class="list-inline-item">Méridien :</div>';
						$chaine = $chaine.'<div class="list-inline-item"><strong>';
						
						if ($result['mer']=='-QM')
						{
							$chaine = $chaine.'Yin Qiao Mai';
						}
						elseif ($result['mer']=='-WM')
						{
							$chaine = $chaine.'Yin Wei Mai';
						}
						elseif ($result['mer']=='+QM')
						{
							$chaine = $chaine.'Yang Qiao Mai';
						}
						elseif ($result['mer']=='+WM')
						{
							$chaine = $chaine.'Yang Wei Mai';
						}
						elseif ($result['mer']=='C')
						{
							$chaine = $chaine.'Cœur';
						}
						elseif ($result['mer']=='ChM')
						{
							$chaine = $chaine.'Chong Mai';
						}
						elseif ($result['mer']=='DaiM')
						{
							$chaine = $chaine.'Dai Mai';
						}
						elseif ($result['mer']=='DM')
						{
							$chaine = $chaine.'Du Mai';
						}
						elseif ($result['mer']=='E')
						{
							$chaine = $chaine.'Estomac';
						}
						elseif ($result['mer']=='F')
						{
							$chaine = $chaine.'Foie';
						}
						elseif ($result['mer']=='GI')
						{
							$chaine = $chaine.'Gros intestin';
						}
						elseif ($result['mer']=='IG')
						{
							$chaine = $chaine.'Intestin Grêle';
						}
						elseif ($result['mer']=='MC')
						{
							$chaine = $chaine.'Protecteur du coeur';
						}
						elseif ($result['mer']=='P')
						{
							$chaine = $chaine.'Poumon';
						}
						elseif ($result['mer']=='R')
						{
							$chaine = $chaine.'Rein';
						}
						elseif ($result['mer']=='RM')
						{
							$chaine = $chaine.'Ren Mai';
						}
						elseif ($result['mer']=='Rte')
						{
							$chaine = $chaine.'Rate Pancréas';
						}
						elseif ($result['mer']=='TR')
						{
							$chaine = $chaine.'Triple réchauffeur';
						}
						elseif ($result['mer']=='V')
						{
							$chaine = $chaine.'Vessie';
						}
						elseif ($result['mer']=='VB')
						{
							$chaine = $chaine.'Vésicule Biliaire';
						}
						
						$chaine = $chaine.'</strong></div>';
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'<div class="col list-inline">';
						$chaine = $chaine.'<div class="list-inline-item">Caractéristique(s) :</div>';
						$chaine = $chaine.'<div class="list-inline-item"><strong>';
						
						$neant=true;
						if (!preg_match("#mv#", $result['type']))
						{
							if (preg_match("#i#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'interne';
									$neant = false;
								}
								else{
									$chaine = $chaine.', interne';
								}
							}
							if (preg_match("#e#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'externe';
									$neant = false;
								}
								else{
									$chaine = $chaine.', externe';
								}
							}
							if (preg_match("#p#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'plein';
									$neant = false;
								}
								else{
									$chaine = $chaine.', plein';
								}
							}
							if (preg_match("#v#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'vide';
									$neant = false;
								}
								else{
									$chaine = $chaine.', vide';
								}
							}
							if (preg_match("#c#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'chaud';
									$neant = false;
								}
								else{
									$chaine = $chaine.', chaud';
								}
							}
							if (preg_match("#f$|fs$|fm$|fi$#", $result['type']))
							{
								if($neant){
									$chaine = $chaine.'froid';
									$neant = false;
								}
								else{
									$chaine = $chaine.', froid';
								}
							}
					  }
						if($neant){
								$chaine = $chaine.'néant'; // Pas de caractéristiques = néant
						}
						
						$chaine = $chaine.'</strong></div>';
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'</div>';
						$chaine = $chaine.'<div class="h6 mt-2 mb-2">Symptômes</div>';
						
						$currentPatho = $result['idP'];
					}
					
					$chaine = $chaine.'<div class="p">';
					$chaine = $chaine.$result['desc'];
					$chaine = $chaine.'</div>';
					
			}
			$chaine = $chaine.'</div>';
			$chaine = $chaine.'</div>';
			return $chaine;
}
?>