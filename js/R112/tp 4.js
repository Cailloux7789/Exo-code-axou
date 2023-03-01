// Définir le mot secret et initialiser les variables
let mots = ["ordinateur", "voiture", "maison", "livre", "chaise"];
let mot_secret = mots[Math.floor(Math.random() * mots.length)];
let mot_cache = Array(mot_secret.length).fill("_");
let coups_restants = 10;
let lettres_trouvees = [];

// Boucle principale du jeu
while (coups_restants > 0 && mot_cache.includes("_")) {
  // Afficher l'état actuel du mot
  console.log(mot_cache.join(" "));

  // Lire la lettre proposée par l'utilisateur
  let lettre = prompt("Il vous reste " + coups_restants + " coups restants. Proposez une lettre :").toLowerCase();

  // Vérifier si la lettre a déjà été proposée
  if (lettres_trouvees.includes(lettre)) {
    console.log("Vous avez déjà proposé cette lettre. Proposez-en une autre !");
    continue;
  }

  // Ajouter la lettre à la liste des lettres proposées
  lettres_trouvees.push(lettre);

  // Vérifier si la lettre est dans le mot secret
  if (mot_secret.includes(lettre)) {
    // Mettre à jour le mot caché avec la lettre trouvée
    for (let i = 0; i < mot_secret.length; i++) {
      if (mot_secret[i] === lettre) {
        mot_cache[i] = lettre;
      }
    }
    console.log("Bravo ! La lettre " + lettre + " est dans le mot.");
  } else {
    // Réduire le nombre de coups restants
    coups_restants--;
    console.log("Dommage ! La lettre " + lettre + " n'est pas dans le mot.");
  }
}

// Afficher le résultat final
if (coups_restants > 0) {
  console.log("Félicitations, vous avez trouvé le mot secret : " + mot_secret);
} else {
  console.log("Désolé, vous avez perdu. Le mot secret était : " + mot_secret);
}
