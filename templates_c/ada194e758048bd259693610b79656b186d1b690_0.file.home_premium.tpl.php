<?php
/* Smarty version 3.1.30, created on 2018-04-23 04:55:58
  from "C:\wamp64\www\tpl\home_premium.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add675e757693_03571480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada194e758048bd259693610b79656b186d1b690' => 
    array (
      0 => 'C:\\wamp64\\www\\tpl\\home_premium.tpl',
      1 => 1524459356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add675e757693_03571480 (Smarty_Internal_Template $_smarty_tpl) {
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

	<div class="row">
		<div class="col">
			<a class="btn btn-outline-primary btn-lg mt-lg-5 mt-3 col " href="index.php?page=recherche"
			title="Rechercher une pathologie dans la liste des pathologies du site">Rechercher une pathologie</a>
		</div>
		<div class="col">
			<a class="btn btn-outline-success btn-lg mt-lg-5 mt-3 col" href="index.php?page=symptome"
			title="Trouver une pathologie en décrivant les symptômes">Décrire les symptômes</a>
		</div>
	</div>
</div>
</header>

<body>
<div class="container">
<div class="row">
		<div class="col">
		<button class="btn btn-outline-warning mt-3 col" type="button" style="cursor:pointer" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="menu">
    RSS
		</button>
		<div class="collapse" id="menu">
			<div class="card card-body"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</div>
		</div>
		</div>
</div>
</div>
</body><?php }
}
