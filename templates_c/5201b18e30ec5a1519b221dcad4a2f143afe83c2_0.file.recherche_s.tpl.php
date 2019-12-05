<?php
/* Smarty version 3.1.30, created on 2018-04-24 07:46:20
  from "/home/pokolleufb/www/tpl/recherche_s.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adec4acbb11c2_00977902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5201b18e30ec5a1519b221dcad4a2f143afe83c2' => 
    array (
      0 => '/home/pokolleufb/www/tpl/recherche_s.tpl',
      1 => 1524512447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5adec4acbb11c2_00977902 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<div class="container">
	<div class="row">
		<div class="col">
			<h1><a href="/" title="Accueil">Wikipuncture</a></h1>
		</div>
		<div class="col mt-3">
			<h6 class="text-right"><?php echo $_smarty_tpl->tpl_vars['identifiant']->value;?>
</h6>
			<ul class="list-inline text-right">
				<li class="list-inline-item"><a href="/" title="A VENIR">Mon compte</a></li>
				<li class="list-inline-item">|</li>
				<li class="list-inline-item"><a href="deconnexion" title="Déconnexion">Déconnexion</a></li>
			</ul>
		</div>
	</div>
</div>
</header>

<body>
<div class="container">
	<h3>Trouver une pathologie par symptômes</h3>
	<h6>Trouvez simplement une pathologie en décrivant les symptômes</h6>
	<div class="recherche">
	<form method="get" action="index.php" id="recherche_symptome">
	<div class="form-inline">
		<input type="hidden" name="page" value="symptome">
		<input type="text" class="form-control w-100" name="q" id="q" placeholder="Entrez des mots-clés (ex : douleur, estomac, abdomen chaud, ...)"
		value="<?php echo $_smarty_tpl->tpl_vars['autofill']->value;?>
" autofocus tabindex="1"/>
	</div>
	</div>

	<div class="row">
		<div class="col">
			<input type="submit" class="btn btn-success btn-lg mt-lg-5 mt-3 col" style="cursor:pointer" value="Rechercher par symptômes" title="Rechercher" />
		</div>
		<div class="col">
			<a class="btn btn-outline-primary btn-lg mt-lg-5 mt-3 col" href="index.php?page=recherche"
			title="Rechercher une pathologie">Rechercher une pathologie</a>
		</div>
	</div>
	</form>
	
	<?php echo $_smarty_tpl->tpl_vars['resultat']->value;?>

	
	
</div>
</body><?php }
}
