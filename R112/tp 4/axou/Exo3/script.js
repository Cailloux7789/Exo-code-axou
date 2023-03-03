let question = prompt ("Quel est le nom des habitants des Bouches-du-Rhones")
nombre = 1

while (question != "Bucco-Rhodaniens") {
    alert(" Reponse incorrecte, reesayez")
    nombre = nombre + 1
    question = prompt ("Quel est le nom des habitants des Bouches-du-Rhones")
}
if (question == "Bucco-Rhodaniens"){
    alert ("La reponse est correcte ! Vous avez fait " + nombre+ " essais.")
}