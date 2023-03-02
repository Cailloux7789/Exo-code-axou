// Renvoie le pokkémon en fontion de l'URL
function get_pokemon(data) {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const id = urlParams.get('id')
  for (const pokemon of data) {
    if (pokemon['nom'] == id) {
      return pokemon
    }
  }
}

// Renvoie une chaîne de caractères avec chaque type de pokémon
// et un lien vers sa page
function format_types(types) {
  let str = "Types : "
  for (const type of types) {
    str += `${type} (<a href="type.html?id=${type}">lien</a>) `
  }
  return str
}

// Renvoie une chaîne de caractères avec chaque pokémon
// et un lien vers sa page
function format_evolutions(evolutions) {
  str = "Évolutions : "
  for (const evolution of evolutions) {
    str += `${evolution} (<a href="pokemon.html?id=${evolution}">lien</a>) `
  }
  return str
}

// Remplir les informations sur le pokemon
const pokemon = get_pokemon(data)
document.querySelector("title").textContent += pokemon['nom']
document.querySelector("h1").textContent = pokemon['nom']
document.querySelector("p#description").textContent = pokemon["description"]
document.querySelector("div#image img").setAttribute("src", "img/" + pokemon["png"])
document.querySelector("#taille").textContent = "Taille : " + pokemon["taille"]
document.querySelector("#poids").textContent = "Poids : " + pokemon["poids"]
document.querySelector("#noms").textContent = `Anglais : ${pokemon['nom_en']} ; Japonais : ${pokemon['nom_ja'][1]} (${pokemon['nom_ja'][0]})`
document.querySelector("#types").innerHTML = format_types(pokemon["type"])
document.querySelector("#evolutions").innerHTML = format_evolutions(pokemon["evolutions"])

// Remplir le menu
ul = document.querySelector('#liste-types')
for (let type of types) {
  let li = document.createElement("li")
  li.innerHTML = `<a href="type.html?id=${type}">${type}</a>`
  ul.appendChild(li)
}