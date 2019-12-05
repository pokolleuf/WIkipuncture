<?php
/* Smarty version 3.1.30, created on 2018-04-23 04:42:20
  from "C:\wamp64\www\tpl\recherche_s.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add642cc914a4_79511051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c8b9e2d8b12e11ec5a02347af1c1a4a9f5a678' => 
    array (
      0 => 'C:\\wamp64\\www\\tpl\\recherche_s.tpl',
      1 => 1524458537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add642cc914a4_79511051 (Smarty_Internal_Template $_smarty_tpl) {
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
				<li class="list-inline-item"><a href="index.php?page=deconnexion" title="Déconnexion">Déconnexion</a></li>
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
