<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Se connecter - Les recettes malines</title>
    <link rel="stylesheet" href="css/main.css">
</head>
 
<body>
	<header>
		<?php include("includes/header.php") ?>
	</header>

	<section>
        <h1 id="seconnecter">
            <p>Se connecter à mon compte</p>
        </h1>

        <div id=signin>
	        <form id="signinform" method="post" action="traitement_form/traitementsignin.php">

	        	<div>
			        <label for="name">Nom :</label>
			        <input class="classique" type="text" id="name" name="user_name" placeholder="Entrez votre identifiant" required>
			    </div>
			    <div>
			        <label for="password">Mot de passe :</label>
			        <input class="classique"  type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
			    </div>
			    <div id="confirmformsignin">
			    	<input class="classique"  type="submit" value="Se connecter">
		    	</div>

			</form>
		</div>

		<div id="creationcompte">
			<p>Vous n'avez pas encore de compte ? <a href="register.php"><strong>Créez votre compte</strong> !</a> </p>
		</div>
	</section>

	<footer  id="footerconnexion">
		<?php include("includes/footer.php") ?>
	</footer>
	

    <script src="js/bodyindex.js"></script>

</body>

</html>