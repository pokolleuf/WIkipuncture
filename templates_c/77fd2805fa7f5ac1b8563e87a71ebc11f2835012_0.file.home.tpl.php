<?php
/* Smarty version 3.1.30, created on 2018-03-16 17:03:58
  from "/var/www/html/tpl/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabeaee2e9fd8_77363932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77fd2805fa7f5ac1b8563e87a71ebc11f2835012' => 
    array (
      0 => '/var/www/html/tpl/home.tpl',
      1 => 1521216138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aabeaee2e9fd8_77363932 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
<h1><a href="accueil.html" title="accueil">Wikipuncture</a></h1>
<img src="logo.jpg" alt="logo">

<form method=post id="connexion_rapide" action="index.php">
<fieldset>

  <label for="email">identifiant:</label>
  <input type="email" name="email" id="email" placeholder="email" autocomplete="email"/>

  <label for="mdp">mdp:</label>
  <input type="password" name="mot de passe" id="mdp" placeholder="mot de passe"/>

  <input type="submit" name="connexion" value="connexion"/>
</fieldset>

</header>

<body>
<p>
  bienvenue sur <stong>Wikipuncture!</strong>
  Ce site vous permet de rechercher des pathologie dans le domaine de l'acupuncture.
  
  Vous voulez effectuer des recherches plus précises? Filtrer vos résultats en fonction des méridiens? et bien d'autres fonctionalité? C'est possible! il vous suffit de vous <a href="inscription.html" title="inscrivez vous ici !">inscrire-ici !</a>

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
