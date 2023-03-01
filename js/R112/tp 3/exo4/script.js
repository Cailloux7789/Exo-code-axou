let tableau = []
let message = "Les mots que vous avez saisis sont : "
for(let i=0; i<10; i++) {
    let mot = prompt(" Ecrivez un mot") 
    tableau.push (mot)
message = message + tableau [i] + " , "
}

message = message + tableau [7] + " et " + tableau [9] + "."

alert(message)