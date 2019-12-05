<header>
<div class="container">
  <h1><a href="/" title="Accueil">Wikipuncture</a></h1>
</div>
</header>

<body>
<div class="container">

    <h3>Se connecter</h3>
		<div id="commentaire">
			<h5>{$commentaire}</h5>
		</div>
		
		<form method=post action="/" id="connexion">
    <fieldset>
      <ul>
				{if $commentaire eq 'Mauvais identifiant ou mot de passe !'}
				<li class="form-inline has-danger mb-3"><label for="email">Identifiant</label>
					<input type="email" class="form-control form-control-danger mx-2 col-md-4" name="email" id="email" placeholder="E-mail"></li>
				<li class="form-inline has-danger mb-3"><label for="pass">Mot de passe</label>
					<input type="password" class="form-control form-control-danger mx-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"></li>
				{else}
				<li class="form-inline mb-3"><label for="email">Identifiant</label>
					<input type="email" class="form-control mx-2 col-md-4" name="email" id="email" placeholder="E-mail"></li>
				<li class="form-inline mb-3"><label for="pass">Mot de passe</label>
					<input type="password" class="form-control mx-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe"></li>
				{/if}			
				<li><a href="connexion" title="A VENIR">Mot de passe oublié?</a></li>
      <li><input type="submit" class="btn btn-primary mt-2 mb-2" style= "cursor:pointer" name="connexion" value="Connexion" title="Connexion" /></li>
      <li><p>Vous êtes nouveau sur Wikiponcture ? <a href="inscription" title="inscription">Créez un compte ici !</a></p></li>
     </ul>
  </fieldset>
</form>
</div>
</body>