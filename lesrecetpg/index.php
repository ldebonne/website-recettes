<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Les recettes malines</title>
    <link rel="stylesheet" href="css/main.css">
</head>
 
<body>
	<header>
		<?php include("includes/header.php") ?>
	</header>

	<section>
		<div id="searchbar">
			<span id="searchtext"><strong>Qu'est ce qui vous ferait plaisir ?</strong></span>
			<form id="searchrecette" method="post" action="traitement_form/traitementsearchrecettes.php">
                <input class="text" type="text" name="searchrecette" placeholder="Rechercher une recette"/>
                <i class="down"></i>
                <input class="button" type="submit" value="GO !"/>
            </form>
        </div>	
		<article id="article1">
			<h1 class="recette_name">Poulet tikka massala</h1>

			<div class= "ingredient_recette">
		        <ul>    
		            <li>Poulet : 500 g</li>
		            <li>Yaourt : 1 pot</li>
		            <li>Riz basmati : 200 g</li>
		            <li>Poudre tikka massala : 1 sachet</li>
		            <li>Lait : 250 mL</li>
		        </ul>
		    </div>

		    <div class= "preparation_recette">
		    	<p> Hacher les oignons, les faire revenir avec de l'huile d'olive, ajouter du sel, poivre, yaourt, et la poudre Tikka Masala, bien mariner le poulet pour 1h avec cette sauce, et cuire le riz en parallèle. Servez chaud.</p> 
	    	</div>

	    	<div class= "saison_ingredients">
		        <ul id = "saison_ingredients_ul">    
		            
		        </ul>
		    </div>

		    <div class= "categorie_recette">
		        <ul>    
		            <li>Plat principal</li>
		            <li>2 heures</li>
		        </ul>
		    </div>


		</article>
		<article id="article2">
			<h1>Second article</h1>

			<p>The year is 50 BC. Gaul is entirely occupied by the Romans. Well, not entirely... One small village of indomitable Gauls still holds out against the invaders. And life is not easy for the Roman legionaries who garrison the fortified camps of Totorum, Aquarium, Laudanum and Compendium...</p>
		</article>
		<article id="article3">
			<h1>Troisième article</h1>

			<p>Prior to creating the Asterix series, Goscinny and Uderzo had previously had success with their series Oumpah-pah, which was published in Tintin magazine.[8] Astérix was originally serialised in Pilote magazine, debuting in the first issue on 29 October 1959.[9] In 1961 the first book was put together, titled Asterix the Gaul. From then on, books were released generally on a yearly basis. Their success was exponential; the first book sold 6,000 copies in its year of publication; a year later, the second sold 20,000. In 1963, the third sold 40,000; the fourth, released in 1964, sold 150,000. A year later, the fifth sold 300,000; 1966's Asterix and the Big Fight sold 400,000 upon initial publication. The ninth Asterix volume, when first released in 1967, sold 1.2 million copies in two days.</p>
		</article>
		<article id="article3">
			<h1>Troisième article</h1>

			<p>Prior to creating the Asterix series, Goscinny and Uderzo had previously had success with their series Oumpah-pah, which was published in Tintin magazine.[8] Astérix was originally serialised in Pilote magazine, debuting in the first issue on 29 October 1959.[9] In 1961 the first book was put together, titled Asterix the Gaul. From then on, books were released generally on a yearly basis. Their success was exponential; the first book sold 6,000 copies in its year of publication; a year later, the second sold 20,000. In 1963, the third sold 40,000; the fourth, released in 1964, sold 150,000. A year later, the fifth sold 300,000; 1966's Asterix and the Big Fight sold 400,000 upon initial publication. The ninth Asterix volume, when first released in 1967, sold 1.2 million copies in two days.</p>
		</article>

	</section>

	<footer>
		<?php include("includes/footer.php") ?>
	</footer>
	

    <script src="js/bodyindex.js"></script>

</body>

</html>