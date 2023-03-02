// Renvoie un tableau avec les pokémon du type id
function get_pokemons(data, id) {
  let pokemons = []
  for (const pokemon of data) {
    for (const type of pokemon["type"]) {
      if (type == id) {
        pokemons.push(pokemon)
      }
    }
  }
  return pokemons
}

// Trouver le type de pokémon à montrer en fonction du paramètre dqns l'URL
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const id = urlParams.get('id')

// Remplir la page
// C'est code est identique à celui de main.js
document.querySelector("title").textContent += id
document.querySelector("h1").textContent = id
const pokemons = get_pokemons(data, id)
let ul = document.querySelector('#liste-pokemon')
for (let pokemon of pokemons) {
  let li = document.createElement("li")
  li.textContent = pokemon["nom"] + " "
  let a = document.createElement("a")
  a.textContent = "lien"
  a.setAttribute("href", `pokemon.html?id=${pokemon["nom"]}`)
  li.appendChild(a)
  let img = document.createElement("img")
  img.setAttribute("src", "img/" + pokemon["gif"])
  img.setAttribute("height", "20px")
  li.appendChild(img)
  ul.appendChild(li)
}

// Remplir le menu
ul = document.querySelector('#liste-types')
for (let type of types) {
  let li = document.createElement("li")
  li.innerHTML = `<a href="type.html?id=${type}">${type}</a>`
  ul.appendChild(li)
}