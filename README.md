# Voici le MCD de ma base de données ecommerce:

![Alt text](MCD.drawio.png)

# Installation de faker pour php:

Télécharger "composer" pour php depuis internet.

Puis téléchager faker avec la commande: `composer req fakerphp/faker`

### Si besoin :
Modifier le fichier `vandor/fakerphp/faker/src/Faker/Provider/Lorem.php`. 
- inverser les paramètres des fonctions join() dans les return des fonctions => join(' ', $variable).

# Insertion de donnée:

Utilisez le script e_commerce.php et changez le nombre en paramètre de la fonction `insert_data()` à la ligne 109. 