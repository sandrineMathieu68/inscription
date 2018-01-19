<!--GESTION DES AFFICHAGES ENTRE HEADER ET FOOTER -->

<div class="container" id="3choix">

		<div class="row">


			<div class="col s12 m12 l5 xl5 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Choix du film</h2>
				<p>Vous souhaitez trouver toutes les informations concernant un film précis?  Cliquez-ici pour choisir le film qui vous intéresse dans la longue liste des films existants.</p>

<!--VOICI LE CAS : ON LUI INDIQUE LE CHEMIN ABSOLU-->
				<a href="http://localhost/machineafilmspagination/films">
					<!-- 1) NOUS DECOUPONS L'URL COMME SUIT-->
					<!-- 2) SOUS FORME D'ARRAY localhost=[0]/machineafilmspagination=[1]/films=[2] -->
					<!-- 3) MAIS OU EST GERE /films=[2] RETOURNE VOIR DANS index.php où le cas est détaillé avec en uri films-->
					<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Accéder à la liste des films</button></a>
			</div>


			<div class="col s12 m12 l5 xl5 choix" >
				<br />
					<form action="accueil" method="post">// envoyer vers le traitement
					    Pseudo: <input type="text" name="pseudo" value="" />
					     
					    Mot de passe: <input type="password" name="mot_de_passe" value="" />
					     
					    <input type="submit" name="" value="Connexion" />
					</form>
			</div>
			
<!--TOUT CE GERE DE CETTE MANIERE ET PEU IMPORTE LA VUE APPELLER-->			
	</div>
</div>