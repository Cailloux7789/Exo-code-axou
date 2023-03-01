let btn = document.querySelector("button")

 function AfficherCacher() {
    let mdp = document.querySelector("span")
    let verification = mdp.classList.contains("cache")
    if (verification == true) {
        mdp.classList.remove("cache")
        btn.textContent = "Cacher"
   }
   else {
    mdp.classList.add("cache")
    btn.textContent = "Afficher"
   }
   return
}
btn.addEventListener('click', AfficherCacher)
