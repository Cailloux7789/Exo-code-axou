let nombre_secret = Math.floor(Math.random() * 101); 
let essais = 0;

alert("Devinez le nombre entre 0 et 100.");

while (true) {
  let proposition = parseInt(prompt("Entrez un nombre :"));
  essais++;

  if (proposition === nombre_secret) {
    alert(`Bravo, vous avez trouvé en ${essais} essais !`);
    break;
  } else if (proposition < nombre_secret) {
    alert("Le nombre secret est plus grand.");
  } else {
    alert("Le nombre secret est plus petit.");
  }
}