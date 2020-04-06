// Article 1 : Ajout de "pintemps" et colorie avec la même couleur que lait

// Ajout d'un nouvel élément printemps
var printempsElt = document.createElement("li"); // Création d'un élément li
printempsElt.id = "printemps"; // Définition de son identifiant
printempsElt.textContent = "Printemps"; // Définition de son contenu textuel
document.getElementById("saison_ingredients_ul").appendChild(printempsElt); // Insertion du nouvel élément
printempsElt.style.backgroundColor = "#a0debf"; // Colorie printemps

var laitElt = document.getElementById("lait"); // Récupère "lait"
laitElt.style.backgroundColor = "#a0debf"; // Colorie lait

// Ajout d'ingrédients

function addingredient(){
	var newingredient = document.getElementById("saisie_ingredient");
	document.getElementById("recetteform").insertBefore(newingredient, document.getElementById("saisie_categorie"));
};