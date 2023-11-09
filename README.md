# Voici le MCD de ma base de données ecommerce:

![Alt text](MCD.drawio.png)

# Installation de faker pour php:

Télécharger "compare" pour php depuis internet.

Puis téléchager faker avec la commande: `compare req fakerphp/faker`

Et modifier le fichier `vandor/src/Faker/Provider/Lorem.php`. 
- inverser les paramètres fonctions join() dans les return des fonctions => join(' ', $variable).

# Insertion de donnée:

Utilisez le script e_commerce.php et changez le nombre en paramètre de la fonction `insert_data()` à la ligne 109. 