# Tehtävä 1
"""
print("Hei, Python!")
"""

# Tehtävä 2
# Kokonaisluvut
"""
x = 5
y = 3
print("x + y =", x + y)
print("x - y =", x - y)
"""

# Liukuluvut
"""
a = 3.5
b = 2.0
print("a + b =", a + b)
print("a - b =", a - b)
"""

# Merkkijonojen yhdistäminen
"""
str1 = "Hei"
str2 = "Python"
print(str1 + " " + str2)
"""

# Tehtävä 3
"""
name = input("Anna nimesi: ")
print(f"Hei, {name}!")
"""

# Tehtävä 4
"""
number = int(input("Anna luku: "))
if number % 2 == 0:
    print("Luku on parillinen.")
else:
    print("Luku on pariton.")
"""

# Tehtävä 5
"""
print("Numerot 1–10:")
for i in range(1, 11):
    print(i)
"""

# Tehtävä 6
"""
import random
secret_number = random.randint(1, 10)
guess = 0
while guess != secret_number:
    guess = int(input("\nArvaa luku 1–10 välillä: "))
    if guess < secret_number:
        print("Liian matala.")
    elif guess > secret_number:
        print("Liian korkea.")
    else:
        print("Oikein!")
"""

# Tehtävä 7
"""
def sum_numbers(a, b):
    return a + b

print("Funktion sum_numbers() testaus:")
print("2 + 3 =", sum_numbers(2, 3))
print("5 + (-2) =", sum_numbers(5, -2))
"""

# Tehtävä 8
"""
import datetime
current_datetime = datetime.datetime.now()
print("Nykyinen päivämäärä ja aika: ")
print(current_datetime)
"""

# Tehtävä 9
"""
favorite_movies = ["Blade Runner", "Mad Max: Fury Road", "Brokeback Mountain", "Tron", "John Wick Chapter 1"]
print("Lempielokuvat:")
for movie in favorite_movies:
    print(movie)
"""

# Tehtävä 10
"""
new_movie = input("Anna uusi lempielokuva: ")
if new_movie not in favorite_movies:
    favorite_movies.append(new_movie)
    print("Elokuva lisätty!")
else:
    print("Elokuva on jo listalla.")
print("Päivitetty lempielokuvien lista: ")
for movie in favorite_movies:
    print(movie)
"""