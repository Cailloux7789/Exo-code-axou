// Remplir la liste de pokemon
let ul = document.querySelector('#liste-pokemon')
for (let pokemon of data) {
    let li = document.createElement("li")
    // La balise <li> contient un texte, un lien et une image
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
    li.innerHTML = `<a href="type.html?id=${type}">${type}</a>` // innerHTML : https://developer.mozilla.org/fr/docs/Web/API/Element/innerHTML 
    ul.appendChild(li)
}