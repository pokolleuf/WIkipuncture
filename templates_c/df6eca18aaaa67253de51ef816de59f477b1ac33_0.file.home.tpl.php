<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:40:52
  from "/home/pokolleufb/www/tpl/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade36c4667588_94074091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6eca18aaaa67253de51ef816de59f477b1ac33' => 
    array (
      0 => '/home/pokolleufb/www/tpl/home.tpl',
      1 => 1524512446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade36c4667588_94074091 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<div class="container">
<h1><a href="/" title="Accueil">Wikipuncture</a></h1>

<form class="form-inline mt-3" method="post" id="connexion_rapide" action="/">
	<label for="email">Identifiant</label>
	<input type="email" class="form-control mr-2 ml-2 col-md-4" name="email" id="email" placeholder="E-mail" />

	<label for="pass">Mot de passe</label>
	<input type="password" class="form-control mr-2 ml-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"/>

	<input type="submit" class="btn btn-primary mt-lg-0 mt-2" style="cursor:pointer" name="connexion" value="Connexion" title="Connexion"/>
</form>

	<div class="row">
		<div class="col">
			<a class="btn btn-outline-primary btn-lg mt-lg-5 mt-3 col " href="index.php?page=recherche"
			title="Rechercher une pathologie dans la liste des pathologies du site">Rechercher une pathologie</a>
		</div>
		<div class="col">
			<a class="btn btn-outline-success btn-lg mt-lg-5 mt-3 col disabled" href="#"
			title="Trouver une pathologie en décrivant les symptômes" aria-disabled="true">Décrire les symptômes</a>
			<small class="ml-3" id="reserved">Ceci est réservé aux membres inscrits.</small>
		</div>
	</div>
</div>
</header>

<body>
<div class="container">
	<p>
		<h4>Bienvenue sur Wikipuncture !</h4>
		<h6>Ce site vous permet de rechercher des pathologies dans le domaine de l'acupuncture.</h6>
		
		<h6>Vous voulez effectuer des recherches plus précises ? Trouver une pathologie en décrivant les symptômes ?</h6>
		<h5>C'est possible ! Il vous suffit de vous <a href="inscription" title="Créer un compte ici !">vous inscrire</a></h5>

	</p>

</div>
</body><?php }
}
