let jours = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"]

let message = "Les jours de la semaine sont "
for (let i = 0; i<=4; i++) {
    message = message + jours [i] + ", "
}

message = message + jours [5] + " et " + jours [6]
alert(message)