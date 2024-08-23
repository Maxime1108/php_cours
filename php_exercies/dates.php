<?php

// la fonction date retourne la date d'aujourd'hui selon le format indiqué
$date = date('d/m/y H:i:s'); // 'd-m-y'(jour-mois-année / y = 24, Y = 2024), 'H:i:s' (heure, minutes, secondes)
echo $date  . '<br>'; // affichera la date récupérée dans $date

// Le timestamp 
// Le timestamp est le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00

echo "<p>" . time() . "</p>"; // retourne l'heure actuelle en timestamp

$dateAleatoire = strtotime('12-03-1998'); // Convertir une date en timestamp
echo $dateAleatoire . '<br>'; // affichera 889657200

$dateAnterieure = strtotime('01-12-1964'); // On peut quand même récupérer les dates avant 1970
echo $dateAnterieure . '<br>';

// strtotime vérifie que la date est valide

$dateValide = strtotime('35-12-2003');

echo $dateAnterieure;


// Méthode procédurale 

$date = date('d-m-Y');

$dateJournee = strtotime('27-09-2020'); // Converti la date 27-09-2020 en secondes depuis le 1er janvier 1970

$dateFormat = date('Y-m-d', $dateJournee); // reconverti Les secondes de $dateJournee en nouveau format de date (2020-09-27)

// Méthode objet 

$dateObjet = new DateTime();// on récupère la classe DateTime();

echo '<p>' . $dateObjet->format('Y-m-d') . '</p>';
