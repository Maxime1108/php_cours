<?php

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */

echo '<h2> Exercice 1 </h2>';

$i = 0;

// Tant que $i est inférieur ou égal à 20
while ($i <= 20) {
    echo "$i <br>";
    // On ajoute 2 à $i 
    $i += 2; // $i = $i +2
}

/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

echo '<h2> Exercice 2 </h2>';

$annees = 2000;

while ($annees <= 2024) {
    echo '<ul>';
    echo '<li>' . $annees . '</li>';
    echo '</ul>';
    $annees++;
}

/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
 * 
 * 
 */

echo '<h2> Exercice 3 </h2>';

$j = 0;

// fait une premiere fois DO, tant que j est inférieur ou égal à 30
do {
    echo ($j += 3) . '<br>';
} while ($j <= 30);

/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

echo '<h2> Exercice 4 </h2>';

$m = 2;

for ($i = 1; $i < 11; $i++) { // soit < 11 ou <= 10
    echo "$m * $i = " . ($m * $i) . '<br>';
}

/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 
 */

echo '<h2> Exercice 5 </h2>';

// table HTML
echo '<table><tbody>';
// Premiere boucle for
for ($i = 1; $i <= 5; $i++) {
    // à chaque itération de la boucle, elle crée un tr
    echo '<tr>';
    // seconde boucle for
    for ($j = 1; $j <= 5; $j++) {
        // A chaque tour de la premiere boucle, la seconde fait ses 5 tours 
        echo "<td>($i,$j)</td>";
    }
    // On ferme le tr à la fin de la seconde boucle
    echo '</tr>';
}
// On oublie pas de fermer les balises tbody et table
echo '</tbody></table>';


/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

echo '<h2> Exercice 6 </h2>';

// Tableau associatif clés valeurs
$tab = [
    'prenom' => 'Enzo',
    'nom' => 'X',
    'email' => 'blabla@mail.fr',
    'age' => 21
];

// On boucle sur le tableau, $k représente les clés, $values les valeurs
foreach ($tab as $k => $values) {
    // Si la clé est différente de email alors il affiche un paragraphe
    if ($k !== 'email') {
        echo "<p> $k : $values </p>";
    } else {
        // Sinon c'est que la clé est email, alors il affiche un lien
        echo "$k : <a href=''> $values </a>";
    }
}

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a href=valeur> </a>)
 * 
 * 
 */

echo '<h2> Exercice 7 </h2>';

// Tableau associatif
$menus = [
    'accueil' => 'index',
    'produits' => 'produits',
    'contact' => 'contact'
];

// Boucle foreach qui va parcourir le tableau
foreach ($menus as $key => $values) {
    // dans le navigateur, dès qu'on cliquera sur $key, il nous redirigera vers $values
    echo "<a href=$values> $key </a> <br>";
}

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * 
 *  Mettre un background vert sur les cellules contenant un nombre pair
 * 
 */

echo '<h2> Exercice 8 </h2>';

echo '<table><tbody>';

// Premiere boucle
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    // Deuxieme boucle
    for ($j = 1; $j <= 10; $j++) {
        // La fonction rand retourne un numéro aleatoire entre 1 et 100
        $aleatoire = rand(1, 100);

        // Si le numéro aléatoire est pair alors il aura un background vert
        if ($aleatoire % 2 == 0) {
            echo "<td style = 'background-color : green'>" . $aleatoire . "</td>";
        } else {
            // Sinon pas de background
            echo "<td>$aleatoire </td>";
        }
    }
    echo '</tr>';
}

echo '</tbody></table>';

/** Exercice 9 : Generation d'un calendrier
 * 
 *  Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge
 * 
 */

echo '<h2> Exercice 9 </h2>';

$mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];

echo '<table border="1" cellspacing="0" cellpadding="5">';

// premiere boucle
for ($i = 0; $i < 12; $i++) {
    // On affiche le mois à chaque nouvelle boucle principale
    echo '<tr><th>' . $mois[$i] . '</th>';

    // 2nd boucle
    for ($j = 1; $j <= 31; $j++) {
        $dayOfWeek = ($j - 1) % 7; // Calcul de modulo (retournera un nombre)
        if ($dayOfWeek == 5 || $dayOfWeek == 6) { // si le modulo retourne 5 ou 6 alors on met les chiffres en rouge
            echo "<td style='color:red'> $j </td>";
        } else {
            echo '<td>' . $j . '</td>';
        }
    }
    echo '</tr>';
}
echo '</table>';

/** Exercice 10 : Tableau de tableaux
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */
echo '<h2> Exercice 10 </h2>';

$tab = [
    'personne1' => [
        'prenom' => 'Daenerys',
        'nom' => 'Targaryen',
        'age' => 23
    ],
    'personne2' => [
        'prenom' => 'Rhaenyra',
        'nom' => 'Targaryen',
        'age' => 33
    ],
    'personne3' => [
        'prenom' => 'Daemon',
        'nom' => 'Targaryen',
        'age' => 49
    ]
];

echo '<ol>';

foreach ($tab as $key => $value) {
    echo "<li> $key </li>
        <ul>
        <li> prenom : $value[prenom] </li>
        <li> nom : $value[nom] </li>
        <li> age : $value[age] ans </li>
        </ul>
        ";
}

echo '</ol>';

$persons = [
    'Personne 1' => [
        'prénom' => 'Enzo',
        'nom' => 'Mahleb',
        'age' => 21
    ],
    'Personne 2' => [
        'prénom' => 'Chayma',
        'nom' => 'Boukedroun',
        'age' => 24
    ],
    'Personne 3' => [
        'prénom' => 'Sirine',
        'nom' => 'Ben ghazala',
        'age' => 25
    ]
];

echo '<ol>';

foreach ($persons as $p => $id) {
    echo '<li><h4>' . $p . '</li>';
    echo '<ul>';
    foreach ($id as $info => $details) {
        echo '<li>' . $info . ' : ' . $details . '</li>';
    }
    echo '</ul>';
}

echo '</ol>';