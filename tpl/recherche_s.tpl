<header>
<div class="container">
	<div class="row">
		<div class="col">
			<h1><a href="/" title="Accueil">Wikipuncture</a></h1>
		</div>
		<div class="col mt-3">
			<h6 class="text-right">{$identifiant}</h6>
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
		value="{$autofill}" autofocus tabindex="1"/>
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
	
	{$resultat}
	
	
</div>
</body>