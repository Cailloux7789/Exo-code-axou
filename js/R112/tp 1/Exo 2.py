x1 = float(input("Entrez le premier nombre : "))
x2 = float(input("Entrez le deuxième nombre : "))
x3 = float(input("Entrez le troisième nombre : "))

if x1 <= x2 and x1 <= x3:
    min = x1
elif x2 <= x1 and x2 <= x3:
    min = x2
else:
    min = x3

print("Le plus petit nombre est :", min)
