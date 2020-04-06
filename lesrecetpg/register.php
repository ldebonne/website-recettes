<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Créer un compte - Les recettes malines</title>
    <link rel="stylesheet" href="css/main.css">
</head>
 
<body>
	<header>
		<?php include("includes/header.php") ?>
	</header>

	<section>
        <h1 id="seconnecter">
            <p>Créez votre compte</p>
        </h1>

        <div id=signin>
	        <form id="registerform" method="post" action="traitement_form/traitementregister.php">
                <div>
                    <label for="mail">Mail :</label>
                    <input class="classique" type="mail" id="mail" name="user_mail" placeholder="Entrez votre mail" required>
                </div>
            	<div>
			        <label for="name">Identifiant :</label>
			        <input class="classique" type="text" id="name" name="user_name" placeholder="Entrez votre Identifiant" required>
			    </div>
			    <div>
			        <label for="password">Mot de passe :</label>
			        <input class="classique" type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
			    </div>
			    <div id="confirmformregister">
			    	<input class="classique" type="submit" value="Créer votre compte">
		    	</div>

			</form>
		</div>

	</section>

	<footer  id="footerconnexion">
		<?php include("includes/footer.php") ?>
	</footer>
	

    <script src="js/bodyindex.js"></script>

</body>

</html>