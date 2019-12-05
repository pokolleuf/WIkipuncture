<header>
<div class="container">
  <h1><a href="/" title="Accueil">Wikipuncture</a></h1>
</div>
</header>

<body>
<div class="container">
  <h3>S'inscrire</h3>
	<div id="commentaire">
		<h5>{$commentaire}</h5>
	</div>
  
  <p>Vous avez déjà un compte ? <a href="connexion" title="Connectez-vous!">Connectez vous ici !</a></p>


  <form method=post action="inscription" id="inscription">
    <fieldset>
      <ul>
				<li class="form-inline mb-3"><label for="prenom">Prénom *</label>
					<input type="text" class="form-control mx-2 col-md-4" name="prenom" id="prenom" placeholder="Prénom" required autofocus/></li>
				<li class="form-inline mb-3"><label for="nom">Nom *</label>
					<input type="text" class="form-control mx-2 col-md-4" name="nom" id="nom" placeholder="Nom" required/></li>
				{if $commentaire eq 'Cette adresse e-mail est déjà utilisée !'}
				<li class="form-inline has-danger mb-3"><label for="email">E-mail *</label>
					<input type="email" class="form-control form-control-danger mx-2 col-md-4" name="email" id="email" placeholder="E-mail" required/></li>
				{else}
				<li class="form-inline mb-3"><label for="email">E-mail *</label>
					<input type="email" class="form-control mx-2 col-md-4" name="email" id="email" placeholder="E-mail" required/></li>
				{/if}
      </ul>
    </fieldset>

    <fieldset>
      <legend>Informations personnelles <i>(facultatif)</i></legend>
      <fieldset>
				<label for="genre">Sexe</label>
				<ul>
					<li class="form-check mb-3">
						<label class="form-check-label"><input class="form-check-input" type="radio" name="genre" value="h"/ checked="checked"> Homme</label>
					</li>
					<li class="form-check mb-3">
						<label class="form-check-label"><input class="form-check-input" type="radio" name="genre" value="f"/> Femme</label>
					</li>
				</ul>
      </fieldset>
      <fieldset>
				<label for="situation">Êtes-vous :</label>
				<ul>
					<li class="form-check mb-3">
						<label class="form-check-label"><input class="form-check-input" type="radio" name="situation" value="1"/ checked="checked"> Acupuncteur</label>
					</li>
					<li class="form-check mb-3">
						<label class="form-check-label"><input class="form-check-input" type="radio" name="situation" value="0"/> Particulier</label>
					</li>
				</ul>
      </fieldset>
    </fieldset>

    <fieldset>
			<legend>Mot de passe <i>(doit comporter minimum 8 caractères)</i></legend>
			<ul>
				<li class="form-inline mb-3"><label for="pass">Mot de passe *</label>
				<input type="password" class="form-control mx-2 col-md-4" name="pass" id="pass" placeholder="Mot de passe" minlength="8" maxlength="16" required onchange="checkPassword()"/></li>

				<li class="form-inline mb-3"><label for="confirm_pass">Confirmer le mot de passe *</label>
				<input type="password" class="form-control mx-2 col-md-4" name="confirm_pass" id="confirm_pass" placeholder="Confirmer le mot de passe" minlength="8" maxlength="16" required onkeyup="checkPassword()"/></li>
			</ul>
		</fieldset>
		
		<fieldset>
		<h6 class="form-check mb-3">
			<label class="form-check-label"><input class="form-check-input" type="checkbox" name="cgu" value="1" required/> Accepter les conditions d'utilisation *</label>
		</h6>
			<p><i>* champs requis</i></p>
			<input type="submit" class="btn btn-primary mt-lg-0 mt-2" style="cursor:pointer" name="inscription" value="Créer un compte" title="Créer un compte" />
		</fieldset>

  </form>
</div>
</body>