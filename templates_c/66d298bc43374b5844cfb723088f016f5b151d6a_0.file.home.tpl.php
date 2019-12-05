<?php
/* Smarty version 3.1.30, created on 2018-04-04 21:36:48
  from "C:\wamp\www\tpl\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac54570a247d1_20855315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d298bc43374b5844cfb723088f016f5b151d6a' => 
    array (
      0 => 'C:\\wamp\\www\\tpl\\home.tpl',
      1 => 1522877800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac54570a247d1_20855315 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<h1><a href="accueil.html" title="accueil">Wikipuncture</a></h1>
<img src="logo.jpg" alt="logo">

<form method=post id="connexion_rapide" action="/">
<fieldset>

  <label for="email">identifiant:</label>
  <input type="email" name="email" id="email" placeholder="email" autocomplete="email"/>

  <label for="pass">mdp:</label>
  <input type="password" name="pass" id="pass" placeholder="mot de passe"/>

  <input type="submit" name="connexion" value="connexion"/>
</fieldset>

</header>

<body>
<p>
  <h4>Bienvenue sur <stong>Wikipuncture!</h4>
  <h4>Ce site vous permet de rechercher des pathologie dans le domaine de l'acupuncture.</h4>
  
  <h4>Vous voulez effectuer des recherches plus précises? Filtrer vos résultats en fonction des méridiens? et bien d'autres fonctionalités?</h4>
  <h2>C'est possible! il vous suffit de vous <a href="inscription.html" title="inscrivez vous ici !">inscrire-ici !</a></h2>

</p>
<div class="recherche">

<form method=post action="index.php" id="recherche_simple">
<fieldset>

<label for="champ_recherche">recherche</label>
<input type="text" name="recherche" id="champ_recherche" placeholder="pathologie..." autofocus tabindex="1"/>

</fieldset>
</form>





</body>
<?php }
}
