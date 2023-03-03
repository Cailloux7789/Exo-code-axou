let question = prompt("Quel est le nom des habitants des Bouches-du-Rhones")

while (question != "Bucco-Rhodaniens") {
    alert("La reponse n'est pas correcte")
    question = prompt("Quel est le nom des habitants des Bouches-du-Rhones")
}
if (question == "Bucco-Rhodaniens"){
    alert("La reponse est correcte !")
}