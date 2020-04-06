<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajouter une recette - Les recettes malines</title>
    <link rel="stylesheet" href="css/main.css">
</head>
 
<body>
	<header>
		<?php include("includes/header.php") ?>
	</header>

	<section>
        <h1 id="seconnecter">
            <p>Ajoutez votre recette</p>
        </h1>

        <div id=signin>
	        <form id="recetteform" method="post" action="traitement_form/traitementrecettes.php">

            	<div>
			        <label for="name">Nom :</label>
			        <input class="classique" type="text" id="name" name="nom_recette" placeholder="Entrez le nom de la recette" required>
			    </div>
			    
			    <div id = "saisie_ingredient">
			        <label for="ingredients">Ingrédients :</label>
			        <input class="classique" type="text" id="ingredient" name="ingredient" placeholder="Entrez un ingredient" required>
			        <input class="classique" type="number" min="0" id="quantity" name="quantity" placeholder="Qté" required>
			        <select id="unit" name="unit" required>
			        	<option value="unit">Unité</option>
			        	<option value="g">g</option>
			        	<option value="mg">mg</option>
			        	<option value="L">L</option>
			        	<option value="mL">mL</option>
			        	<option value="sachet">Sachet(s)</option>
			        	<option value="pot">pot(s)</option>
			        	<option value="petite cuillère">petite(s) cuillère(s)</option>
		        	</select>
			        <select id="saison" name="saison">
			        	<option value="saison">Saison (facultatif)</option>
			        	<option value="ete">Ete</option>
			        	<option value="printemps">Printemps</option>
			        	<option value="hiver">Hiver</option>
			        	<option value="automne">Automne</option>
		        	</select>
		        	<input id="button_ingredient" class="button_plus" type="button" onClick="addingredient()"/>
			    </div>
			    
			    <div id = "saisie_categorie">
			        <label for="categorie">Catégorie :</label>
			        <input class="classique" type="text" id="categorie" name="categorie_recette" placeholder="Est ce un plat, un dessert, une entrée ... ?" required>
			        <input id="button_categorie" class="button_plus" type="button"/>
			    </div>

				<div id = "saisie_theme">
			        <label for="theme">Thème :</label>
			        <input class="classique" type="text" id="theme" name="theme_recette" placeholder="A quel thème votre recette peut appartenir ?" required>
			        <input id="button_themes" class="button_plus" type="button"/>
			    </div>

			    <div>
			        <label for="duree">Temps de préparation :</label>
			        <input class="classique" type="number" min="0" id="quantity" name="duree1" required>
			        <select id="time_unit" name="time_unit1" required>
			        	<option value="unit">Unité</option>
			        	<option value="heures">Heure(s)</option>
			        	<option value="minutes">Minutes(s)</option>
		        	</select>
		        	<input class="classique" type="number" min="0" id="quantity" name="duree2" required>
			        <select id="time_unit" name="time_unit2" required>
			        	<option value="unit">Unité</option>
			        	<option value="heures">Minutes(s)</option>
		        	</select>
			    </div>

			    <div>
			        <label for="recette">Recette :</label>
			        <textarea id="recette" name="recette" placeholder="Ecrivez le déroulement de votre recette" required></textarea>
			    </div>

			    <div id="confirmformrecette">
			    	<input class="classique" type="submit" value="Enregistrer la recette">
		    	</div>

			</form>
		</div>

	</section>

	<footer>
		<?php include("includes/footer.php") ?>
	</footer>
	

    <script src="js/bodyindex.js"></script>

</body>

</html>