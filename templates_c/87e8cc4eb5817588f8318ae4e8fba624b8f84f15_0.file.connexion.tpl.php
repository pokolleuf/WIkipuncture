<?php
/* Smarty version 3.1.30, created on 2018-04-23 21:41:11
  from "/home/pokolleufb/www/tpl/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ade36d7bc9a75_97056308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87e8cc4eb5817588f8318ae4e8fba624b8f84f15' => 
    array (
      0 => '/home/pokolleufb/www/tpl/connexion.tpl',
      1 => 1524512446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ade36d7bc9a75_97056308 (Smarty_Internal_Template $_smarty_tpl) {
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
				<li><a href="connexion" title="A VENIR">Mot de passe oublié?</a></li>
      <li><input type="submit" class="btn btn-primary mt-2 mb-2" style= "cursor:pointer" name="connexion" value="Connexion" title="Connexion" /></li>
      <li><p>Vous êtes nouveau sur Wikiponcture ? <a href="inscription" title="inscription">Créez un compte ici !</a></p></li>
     </ul>
  </fieldset>
</form>
</div>
</body><?php }
}
