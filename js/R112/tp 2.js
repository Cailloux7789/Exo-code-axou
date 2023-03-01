let nombre1 = parseFloat(prompt("choisi un nombre"));
let nombre2 = parseFloat(prompt("choisi un nombre"));
let nombre3 = parseFloat(prompt("choisi un nombre"));

let plusGrand;

if (nombre1 > nombre2 && nombre1 > nombre3) {
    plusGrand = nombre1;
} else if (nombre2 > nombre1 && nombre2 > nombre3) {
    plusGrand = nombre2;
} else {
    plusGrand = nombre3;
}

console.log("Le plus grand nombre est " + plusGrand);