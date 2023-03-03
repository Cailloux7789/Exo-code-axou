let comptes = [
  {"nom": "Instagram", "compte": "@instagram", "abonnes": 552},
  {"nom": "Cristiano Ronaldo", "compte": "@cristiano", "abonnes": 484},
  {"nom": "Kylie Jenner", "compte": "@kyliejenner", "abonnes": 370},
  {"nom": "Lionel Messi", "compte": "@leomessi", "abonnes": 363},
  {"nom": "Selena Gomez", "compte": "@selenagomez", "abonnes": 348},
  {"nom": "Dwayne Johnson", "compte": "@therock", "abonnes": 339},
  {"nom": "Ariana Grande", "compte": "@arianagrande", "abonnes": 332},
  {"nom": "Kim Kardashian", "compte": "@kimkardashian", "abonnes": 330},
  {"nom": "Beyoncé", "compte": "@beyonce", "abonnes": 276},
  {"nom": "Khloé Kardashian", "compte": "@khloekardashian", "abonnes": 273}
]

for (let valeur of comptes) {
    console.log(`Le compte de ${valeur["nom"]} (${valeur["compte"]}) a ${valeur["abonnes"]}`)
}