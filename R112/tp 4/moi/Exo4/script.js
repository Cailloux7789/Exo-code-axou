Nombre = 27
let question = Number(prompt("Trouvez le nombre secret qui se situe entre 1 et 100 !")) 

while (question != Nombre){
    if (question < Nombre ) {
        alert ("Non ! Le nombre est plus grand :)")
    }
    if (question > Nombre ) {
        alert ("Non ! Le nombre est plus petit :)")
    }
        question = Number(prompt("Trouvez le nombre secret qui se situe entre 1 et 100 !"))
}
alert("Ouiii ! Le nombre secret etait bien " + Nombre )