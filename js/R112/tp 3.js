let jours = [
  ["lundi", "lunes", "lunedì", "montag"],
  ["mardi", "martes", "martedì", "dienstag"],
  ["mercredi", "miércoles", "mercoledì", "mittwoch"],
  ["jeudi", "jueves", "giovedì", "donnerstag"],
  ["vendredi", "viernes", "venerdì", "freitag"],
  ["samedi", "sábado", "sabato", "samstag"],
  ["dimanche", "domingo", "domenica", "sonntag"]
];

let jour = prompt("Entrez un jour de la semaine en français, espagnol, italien ou allemand :");

let traductions = [];

for (let i = 0; i < jours.length; i++) {
  if (jours[i].includes(jour.toLowerCase())) {
    for (let j = 0; j < jours[i].length; j++) {
      if (jours[i][j] !== jour.toLowerCase()) {
        traductions.push(jours[i][j]);
      }
    }
    break;
  }
}

if (traductions.length === 0) {
  console.log("Le jour que vous avez entré n'a pas été trouvé dans le dictionnaire.");
} else {
  let jourTraduit = "En français, le jour est " + jour + ", en espagnol il est " + traductions[0] + ", en italien il est " + traductions[1] + " et en allemand il est " + traductions[2] + ".";
  console.log(jourTraduit);
}
