liste = [4, 8, 1, 5, 9, 3, 2, 7, 6, 0]  # Exemple de liste de 10 nombres

min = liste[0]  # On initialise le minimum avec le premier nombre de la liste
for i in range(1, 10):
    if liste[i] < min:
        min = liste[i]  # On met à jour le minimum si on trouve un nombre plus petit dans la liste

print(min)  # On affiche le nombre le plus petit trouvé
