liste = [4, 2, 8, 1, 6, 9, 3, 7, 5, 0]
liste_triée = []

while len(liste) > 0:
    # Trouver le plus petit nombre dans la liste
    min_nombre = liste[0]
    for nombre in liste:
        if nombre < min_nombre:
            min_nombre = nombre

    # Ajouter le plus petit nombre à la liste triée et le retirer de la liste originale
    liste_triée.append(min_nombre)
    liste.remove(min_nombre)

print(liste_triée)
