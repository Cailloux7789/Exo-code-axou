let boutons = document.querySelectorAll("button")

for(let button of boutons ) {
    button.addEventListener('click', AfficherCacher)
}
 function AfficherCacher(clique) {
    let btn = clique.target
    let section = btn.closest("section")
    let description = section.querySelector("p")
    if (description.classList.contains("cache") == true) {
        description.classList.remove("cache")
        btn.textContent = "Cacher"
   }
   else {
        description.classList.add("cache")
        btn.textContent = "Afficher"
   }
   return
}
