<?php 
function recherche(){
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
						WHERE p.desc LIKE \'%'.$_GET['q'].'%\' AND (';
		
		//On agrémente notre requête avec les filtres s'il y en a
		
		// Filtre type
		
		$type=true;
		if(isset($_GET['m']) and !isset($_GET['mv'])){
			$sql = $sql.'NOT p.type LIKE \'mv%\') AND ('; // On discrimine le cas "mv" car il contient "m"
		}
		if(isset($_GET['m'])){
			if($type){
				$sql = $sql.'p.type LIKE \'m%\' ';
				$type = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'m%\' ';
			}
		}
		if(isset($_GET['tf'])){
			if($type){
				$sql = $sql.'p.type LIKE \'tf%\' ';
				$type = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'tf%\' ';
			}
		}
		if(isset($_GET['j'])){
			if($type){
				$sql = $sql.'p.type LIKE \'j%\' ';
				$type = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'j%\' ';
			}
		}
		if(isset($_GET['l'])){
			if($type){
				$sql = $sql.'p.type LIKE \'l%\' ';
				$type = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'l%\' ';
			}
		}
		if(isset($_GET['mv'])){
			if($type){
				$sql = $sql.'p.type LIKE \'mv%\' ';
				$type = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'mv%\' ';
			}
		}
		if($type){
			$sql = $sql.'1 '; // Pas de filtre type
		}
		
		// Filtre méridien
		
		$mer=true;
		$sql = $sql.') AND ( ';		
		if (isset($_GET['-QM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'-QM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'-QM\' ';
			}
		}
		if (isset($_GET['-WM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'-WM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'-WM\' ';
			}
		}
		if (isset($_GET['+QM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'+QM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'+QM\' ';
			}
		}
		if(isset($_GET['+WM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'+WM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'+WM\' ';
			}
		}
		if(isset($_GET['C']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'C\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'C\' ';
			}
		}
		if(isset($_GET['ChM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'ChM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'ChM\' ';
			}
		}
		if(isset($_GET['DaiM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'DaiM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'DaiM\' ';
			}
		}
		if(isset($_GET['DM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'DM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'DM\' ';
			}
		}
		if(isset($_GET['E']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'E\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'E\' ';
			}
		}
		if(isset($_GET['F']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'F\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'F\' ';
			}
		}
		if(isset($_GET['GI']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'GI\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'GI\' ';
			}
		}
		if(isset($_GET['IG']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'IG\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'IG\' ';
			}
		}
		if(isset($_GET['MC']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'MC\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'MC\' ';
			}
		}
		if(isset($_GET['P']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'P\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'P\' ';
			}
		}
		if(isset($_GET['R']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'R\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'R\' ';
			}
		}
		if(isset($_GET['RM']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'RM\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'RM\' ';
			}
		}
		if(isset($_GET['Rte']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'Rte\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'Rte\' ';
			}
		}
		if(isset($_GET['TR']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'TR\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'TR\' ';
			}
		}
		if(isset($_GET['V']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'V\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'V\' ';
			}
		}
		if(isset($_GET['VB']))
		{
			if($mer){
				$sql = $sql.'p.mer = \'VB\' ';
				$mer = false;
			}
			else{
				$sql = $sql.'OR p.mer = \'VB\' ';
			}
		}
		if($mer){
			$sql = $sql.'1 '; // Pas de filtre méridien
		}
		
		// Filtre caractéristique
		
		$car=true;
		$sql = $sql.') AND ( ';		
		if (isset($_GET['plein']))
		{
			if($car){
				$sql = $sql.'p.type LIKE \'%p%\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'%p%\' ';
			}
		}
		if (isset($_GET['vide']))
		{
			if($car){
				$sql = $sql.'NOT p.type LIKE \'mv%\' AND p.type LIKE \'%v%\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR NOT p.type LIKE \'mv%\' AND p.type LIKE \'%v%\' ';
			}
		}
		if (isset($_GET['froid']))
		{
			if($car){
				$sql = $sql.'p.type LIKE \'%f\' OR p.type LIKE \'%fs\' OR p.type LIKE \'%fm\' OR p.type LIKE \'%fi\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'%f\' OR p.type LIKE \'%fs\' OR p.type LIKE \'%fm\' OR p.type LIKE \'%fi\' ';
			}
		}
		if (isset($_GET['chaud']))
		{
			if($car){
				$sql = $sql.'p.type LIKE \'%c%\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'%c%\' ';
			}
		}
		if (isset($_GET['interne']))
		{
			if($car){
				$sql = $sql.'p.type LIKE \'%i%\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'%i%\' ';
			}
		}
		if (isset($_GET['externe']))
		{
			if($car){
				$sql = $sql.'p.type LIKE \'%e%\' ';
				$car = false;
			}
			else{
				$sql = $sql.'OR p.type LIKE \'%e%\' ';
			}
		}
		if($car){
			$sql = $sql.'1 '; // Pas de filtre caractéristique
		}
			
		$sql = $sql.') ORDER BY p.idP';
		
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