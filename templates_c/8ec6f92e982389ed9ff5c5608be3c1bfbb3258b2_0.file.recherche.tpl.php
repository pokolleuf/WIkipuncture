<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:41:00
  from "/home/pokolleufb/www/tpl/recherche.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade36ccab7b98_08571822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec6f92e982389ed9ff5c5608be3c1bfbb3258b2' => 
    array (
      0 => '/home/pokolleufb/www/tpl/recherche.tpl',
      1 => 1524512447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade36ccab7b98_08571822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<div class="container">
<h1><a href="/" title="Accueil">Wikipuncture</a></h1>

<form class="form-inline mt-3" method="post" id="connexion_rapide" action="/">
	<label for="email">Identifiant</label>
	<input type="email" class="form-control mr-2 ml-2 col-md-4" name="email" id="email" placeholder="E-mail" />

	<label for="pass">Mot de passe</label>
	<input type="password" class="form-control mr-2 ml-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"/>

	<input type="submit" class="btn btn-primary mt-lg-0 mt-2" style= "cursor:pointer" name="connexion" value="Connexion" title="Connexion"/>
</form>
</div>
</header>

<body>
<div class="container">
	<h3>Rechercher une pathologie</h3>
	<h6>Vous pouvez lancer une recherche vide pour accéder à l'intégralité de la liste des pathologies.</h6>
	<div class="recherche">
	<form method="get" action="index.php" id="recherche_simple">
	<div class="form-inline">
		<input type="hidden" name="page" value="recherche">
		<input type="text" class="form-control w-100" name="q" id="q" placeholder="Rechercher une pathologie (ex : méridien du poumon externe, ...)"
		value="<?php echo $_smarty_tpl->tpl_vars['autofill']->value;?>
" autofocus tabindex="1"/>
	</div>
	</div>
		
		<div class="row">
		<div class="col">
		<fieldset>
		<button class="btn btn-primary mt-3 col" type="button" style="cursor:pointer" data-toggle="collapse" data-target="#menu1" aria-expanded="false" aria-controls="menu1">
    Filtrer par type
		</button>
		<div class="collapse" id="menu1">
			<div class="card card-body">
						<ul>
							<li><input type="checkbox" name="m"><label for="meridien">Méridien</label></li>
							<li><input type="checkbox" name="tf"><label for="organe-viscere">Organe-Viscère (tsang/fu)</label></li>
							<li><input type="checkbox" name="j"><label for="tendino-musculaire">Tendino-musculaire (jing jin)</label></li>
							<li><input type="checkbox" name="l"><label for="branches">Branches (voies luo)</label></li>
							<li><input type="checkbox" name="mv"><label for="merveilleux-vaisseaux">Merveilleux Vaisseaux</label></li>
						</ul>
			</div>
		</div>
		</fieldset>
		</div>
		<div class="col">
		<fieldset>
		<button class="btn btn-primary mt-3 col" type="button" style="cursor:pointer" data-toggle="collapse" data-target="#menu2" aria-expanded="false" aria-controls="menu2">
    Filtrer par méridien
		</button>
		<div class="collapse" id="menu2">
			<div class="card card-body">
				<ul>
					<li><input type="checkbox" name="-QM"><label for="-QM">Yin Qiao Mai</label></li>
					<li><input type="checkbox" name="-WM"><label for="-WM">Yin Wei Mai</label></li>
					<li><input type="checkbox" name="+QM"><label for="+QM">Yang Qiao Mai</label></li>
					<li><input type="checkbox" name="+WM"><label for="+WM">Yang Wei Mai</label></li>
					<li><input type="checkbox" name="C"><label for="C">Cœur</label></li>
					<li><input type="checkbox" name="ChM"><label for="ChM">Chong Mai</label></li>
					<li><input type="checkbox" name="DaiM"><label for="DaiM">Dai Mai</label></li>
					<li><input type="checkbox" name="DM"><label for="DM">Du Mai</label></li>
					<li><input type="checkbox" name="E"><label for="E">Estomac</label></li>
					<li><input type="checkbox" name="F"><label for="F">Foie</label></li>
					<li><input type="checkbox" name="GI"><label for="GI">Gros intestin</label></li>
					<li><input type="checkbox" name="IG"><label for="IG">Intestin Grêle</label></li>
					<li><input type="checkbox" name="MC"><label for="MC">Protecteur du coeur</label></li>
					<li><input type="checkbox" name="P"><label for="P">Poumon</label></li>
					<li><input type="checkbox" name="R"><label for="R">Rein</label></li>
					<li><input type="checkbox" name="RM"><label for="RM">Ren Mai</label></li>
					<li><input type="checkbox" name="Rte"><label for="Rte">Rate Pancréas</label></li>
					<li><input type="checkbox" name="TR"><label for="TR">Triple réchauffeur</label></li>
					<li><input type="checkbox" name="V"><label for="V">Vessie</label></li>
					<li><input type="checkbox" name="VB"><label for="VB">Vésicule Biliaire</label></li>
				</ul>
			</div>
		</div>
		</div>
	  </fieldset>
		<div class="col">
		<fieldset>
		<button class="btn btn-primary mt-3 col" type="button" style="cursor:pointer" data-toggle="collapse" data-target="#menu3" aria-expanded="false" aria-controls="menu3">
    Filtrer par caractéristique
		</button>
		<div class="collapse" id="menu3">
			<div class="card card-body">
				<ul>
					<li><input type="checkbox" name="plein"><label for="plein">plein</label></li>
					<li><input type="checkbox" name="vide"><label for="vide">vide</label></li>
					<li><input type="checkbox" name="chaud"><label for="chaud">chaud</label></li>
					<li><input type="checkbox" name="froid"><label for="froid">froid</label></li>
					<li><input type="checkbox" name="interne"><label for="interne">interne</label></li>
					<li><input type="checkbox" name="externe"><label for="externe">externe</label></li>
				</ul>
			</div>
		</div>
		</fieldset>
		</div>
		</div>

	<div class="row">
		<div class="col">
			<input type="submit" class="btn btn-primary btn-lg mt-lg-5 mt-3 col" style="cursor:pointer" value="Rechercher une pathologie" title="Rechercher" />
		</div>
		<div class="col">
			<a class="btn btn-outline-success btn-lg mt-lg-5 mt-3 col disabled" href="#"
			title="Trouver une pathologie en décrivant les symptômes" aria-disabled="true">Décrire les symptômes</a>
			<small class="ml-3" id="reserved">Ceci est réservé aux membres inscrits.</small>
		</div>
	</div>
	</form>
	
	<?php echo $_smarty_tpl->tpl_vars['resultat']->value;?>

	
	
</div>
</body><?php }
}
