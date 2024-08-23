<?php

/*

Exercice 1 : Salutation Basique
Crée une fonction saluer($nom) qui prend un nom en paramètre et affiche "Bonjour, $nom !".

*/

function saluer($nom) {
    echo "Bonjour, $nom !";
}


saluer("Ellie");

/*
Exercice 2 : Addition Simple
Crée une fonction addition($a, $b) qui retourne la somme de deux nombres.

*/

function addition($a, $b) {
    return $a + $b;
}


$resultat = addition(2, 4);  
echo $resultat;

/*
Exercice 3 : Vérifier Si un Nombre est Pair
Crée une fonction estPair($nombre) qui retourne true si le nombre est pair, sinon false.
*/

function estPair($nombre) {
    return $nombre % 2 === 0;
}

// Exemple d'utilisation
$resultat = estPair(4);  
echo $resultat ? 'true' : 'false';  

$resultat = estPair(7);  
echo $resultat ? 'true' : 'false';  

/*
Exercice 4 : Boucle de Nombres
Utilise une boucle for pour afficher les nombres de 1 à 10.
*/

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

/*
Exercice 5 : Affichage de Tableaux
Crée un tableau avec 5 prénoms, puis utilise une boucle foreach pour les afficher.
*/

$prenoms = ["Alice", "Hugo", "Amicia", "Joel", "Ellie"];

foreach ($prenoms as $prenom) {
    echo $prenom . "\n";
}

/*
Exercice 6 : Somme des Nombres d’un Tableau
Crée un tableau de 5 nombres, puis utilise une boucle pour calculer et afficher la somme des valeurs du tableau.
*/

$nombre = [8, 4, 2, 5, 1];

$somme = 0;

foreach ($nombre as $valeur) {
    $somme += $valeur;
}

echo "La somme des nombres est : " . $somme;

/*
Exercice 7 : Trouver le Plus Grand Nombre
Crée un tableau de nombres et trouve la valeur maximale en utilisant une boucle.
*/

$nombre = [52, 75, 63, 77, 64, 89, 12];

$max = $nombre[0];  

foreach ($nombre as $valeur) {
    if ($valeur > $max) {
        $max = $valeur;
    }
}

echo "Le plus grand nombre est : " . $max;

/*
Exercice 8 : Vérifier le Type d'une Variable
Crée une fonction qui prend une variable en paramètre et affiche son type (entier, flottant, chaîne de caractères, etc.).
*/



/*
Exercice 10 : Générer un Mot de Passe
Crée une fonction qui génère un mot de passe aléatoire de 8 caractères.
chercher random_bytes;
*/



/*
Exercice 11 : Calcul de Factorielle
Crée une fonction factorielle($n) qui calcule et retourne la factorielle d’un nombre en utilisant une boucle.
*/



/*
Exercice 12 : Vérification d’Email
Crée une fonction qui prend un email en paramètre et vérifie s’il est valide (utilise filter_var()).
*/



/*
Exercice 13 : Afficher les Multiples de 3
Utilise une boucle pour afficher tous les multiples de 3 entre 1 et 30.
*/

for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0) {
        echo $i . "\n";
    }
}

/*
Exercice 14 : Tri d’un Tableau
Crée un tableau de nombres et trie-le dans l’ordre croissant en utilisant sort().
*/

$nombre = [42, 15, 8, 23, 4, 16, 9];

sort($nombre);

foreach ($nombre as $valeur) {
    echo $valeur . "\n";
}

/*
Exercice 15 : Fusionner Deux Tableaux
Crée deux tableaux de nombres, fusionne-les en un seul, et affiche le tableau fusionné.
*/



/*
Exercice 17 : Conversion de Types
Crée une fonction qui prend un nombre flottant, le convertit en chaîne de caractères, puis affiche le type avant et après conversion.
*/



/*Exercice 18 : Boucle de Division
Utilise une boucle while pour diviser un nombre par 2 jusqu'à ce qu'il soit inférieur à 1.
*/



/*
Exercice 19 : Vérifier les Nombres Pairs dans un Tableau
Crée une fonction qui prend un tableau de nombres, vérifie lesquels sont pairs, et les affiche.
*/



/*
Exercice 21 : Somme des Carrés
Crée une fonction qui prend un tableau de nombres, calcule le carré de chaque nombre, puis retourne la somme de ces carrés.
*/



/*
Exercice 22 : Inverser un Tableau
Crée une fonction qui prend un tableau et retourne un nouveau tableau avec les éléments dans l'ordre inverse.
*/



/*
Exercice 23 : Comparaison de Nombres
Crée une fonction qui prend deux nombres et retourne le plus grand des deux.
*/

function plusGrand($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$nombre1 = 56;
$nombre2 = 87;

$plusGrandNombre = plusGrand($nombre1, $nombre2);

/*
Exercice 24 : Recherche dans un Tableau
Crée une fonction qui prend un tableau et un élément, et vérifie si cet élément est présent dans le tableau.
*/



/*
Exercice 25 : Moyenne des Notes
Crée un tableau de notes (entre 0 et 20) et une fonction qui calcule la moyenne des notes.
*/



/*
Exercice 26 : Compter les Voyelles
Crée une fonction qui prend une chaîne de caractères et retourne le nombre de voyelles dans la chaîne.
*/



/*
Exercice 27 : Générer une Table de Multiplication
Crée une fonction qui génère et affiche la table de multiplication d'un nombre donné.
*/



/*
Exercice 29 : Filtrer les Notes Supérieures à un Seuil
Crée une fonction qui prend un tableau de notes et un seuil, et retourne un tableau avec les notes supérieures au seuil.
*/



/*
Exercice 31 : Afficher les Articles d'une Liste de Courses
Crée un tableau contenant une liste de courses, puis utilise une boucle pour afficher chaque article.
*/



/*
Exercice 32 : Conversion de Devises
Crée une fonction qui prend une somme en euros et la convertit en dollars (en utilisant un taux de conversion fixe).
*/



/*
Exercice 33 : Afficher les Nombres Impairs
Utilise une boucle pour afficher tous les nombres impairs entre 1 et 20.
*/



/*
Exercice 34 : Vérifier Si une Chaîne Contient un Mot
Crée une fonction qui prend une chaîne de caractères et un mot, et retourne true si le mot est trouvé dans la chaîne, sinon false.
*/