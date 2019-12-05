<?php
/* Smarty version 3.1.30, created on 2018-04-23 04:43:42
  from "C:\wamp64\www\tpl\connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5add647e4e8968_22444244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72520b888923e5bab9ece42adccc233982fcb980' => 
    array (
      0 => 'C:\\wamp64\\www\\tpl\\connexion.tpl',
      1 => 1524458614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5add647e4e8968_22444244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<div class="container">
  <h1><a href="/" title="Accueil">Wikipuncture</a></h1>
</div>
</header>

<body>
<div class="container">

    <h3>Se connecter</h3>
		<div id="commentaire">
			<h5><?php echo $_smarty_tpl->tpl_vars['commentaire']->value;?>
</h5>
		</div>
		
		<form method=post action="/" id="connexion">
    <fieldset>
      <ul>
				<?php if ($_smarty_tpl->tpl_vars['commentaire']->value == 'Mauvais identifiant ou mot de passe !') {?>
				<li class="form-inline has-danger mb-3"><label for="email">Identifiant</label>
					<input type="email" class="form-control form-control-danger mx-2 col-md-4" name="email" id="email" placeholder="E-mail"></li>
				<li class="form-inline has-danger mb-3"><label for="pass">Mot de passe</label>
					<input type="password" class="form-control form-control-danger mx-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"></li>
				<?php } else { ?>
				<li class="form-inline mb-3"><label for="email">Identifiant</label>
					<input type="email" class="form-control mx-2 col-md-4" name="email" id="email" placeholder="E-mail"></li>
				<li class="form-inline mb-3"><label for="pass">Mot de passe</label>
					<input type="password" class="form-control mx-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"></li>
				<?php }?>			
				<li><a href="index.php?page=connexion" title="A VENIR">Mot de passe oublié?</a></li>
      <li><input type="submit" class="btn btn-primary mt-2 mb-2" style= "cursor:pointer" name="connexion" value="Connexion" title="Connexion" /></li>
      <li><p>Vous êtes nouveau sur Wikiponcture ? <a href="index.php?page=inscription" title="inscription">Créez un compte ici !</a></p></li>
     </ul>
  </fieldset>
</form>
</div>
</body><?php }
}
