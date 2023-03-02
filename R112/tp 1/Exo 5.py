import random

nombre_secret = random.randint(0, 100)
essais = 0

while True:
    choix = int(input("Entrez un nombre entier entre 0 et 100 : "))
    essais += 1
    
    if choix == nombre_secret:
        print(f"Bravo, vous avez trouvé le nombre secret en {essais} essais.")
        break
    elif choix > nombre_secret:
        print("Le nombre secret est plus petit.")
    else:
        print("Le nombre secret est plus grand.")
