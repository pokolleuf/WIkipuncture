<?php
/* Smarty version 3.1.30, created on 2018-04-05 14:19:52
  from "C:\wamp64\www\tpl\connect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac630887ac312_05633607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2170af21aa7879a9a61ded9cf3a803fa599bdfa2' => 
    array (
      0 => 'C:\\wamp64\\www\\tpl\\connect.tpl',
      1 => 1522937974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac630887ac312_05633607 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <h1><a href="accueil.html" title="accueil">Wikipuncture</a></h1>
  <img src="logo.jpg" alt="logo">
</header>

<body>
<form method=post action="index.php" id="connexion">
  <fieldset>

    <h1>Connectez-vous</h1>
		<h3><?php echo $_smarty_tpl->tpl_vars['commentaire']->value;?>
</h3>
    <ul>
      <li><label for="email">identifiant:</label></li>
      <li><input type="email" name="email" id="email" placeholder="email" autocomplete="email" autofocus/></li>
      <li></li>
      <li><label for="mdp">mot de passe:</label></li>
      <li><input type="password" name="mot de passe" id="mdp" placeholder="mot de passe"/></li>
      <li><a href="forget_password.html" title="mot de passe oublié">mot de passe oublié?</a></li>
      <li></li>
      <li><input type="submit" name="connexion" value="connexion"/></li>
      <li><p>Vous êtes nouveau sur Wikiponcture? <a href="inscription.html" title="inscription">inscrivez vous ici!</a></p></li>
     </ul>
  </fieldset>
</form>

</body><?php }
}
