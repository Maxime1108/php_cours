<?php

// N'oubliez pas de vérifier sur votre navigateur à chaque exercice 

/** Exercice 1 : Création script PHP basique
 *  
 *  1 . Créer un fichier nommé script.php;
 * 
 *  2 . Dans ce fichier, ouvrir une balise php;
 * 
 *  3 . Utiliser echo pour afficher le texte suivant : Hello World, Bienvenue sur mon premier script PHP;
 * 
 *  4 . Fermer la balise php;
 * 
 */


/** Exercice 2 : Echo et Print 
 *  Objectif : comprendre la différence entre echo et print
 * 
 *  1 . Créer un fichier PHP nommé affichage.php;
 * 
 *  2 . Utiliser echo pour afficher le texte : Bonjour tout le monde !. Suivi d'un saut de ligne
 * 
 *  3 . Utiliser ensuite print pour afficher le texte : Aujourd'hui, nous sommes le (date d'aujourd'hui + mois d'aujourd'hui). Suivi d'un saut de ligne
 */


/** Exercice 3 : HTML et PHP 
 *  Objectif : comprendre que PHP génére du HTML
 * 
 *  1 . Créer un fichier PHP nommé html_php.php;
 * 
 *  2 . Ecrire du code HTML à l'intérieur (code de démarrage HTML) avec un <h1></h1>;
 * 
 *  3 . A l'interieur des balises PHP, utiliser echo pour afficher un paragraphe <p></p> avec le texte suivant : Ce texte est affiché depuis PHP;
 * 
 */

/** Exercice 4 : commentaires en PHP 
 *  Objectif : savoir commenter sur une ou plusieurs lignes (exercice cadeau)
 * 
 *  1 . Créer un fichier commentaire.php;
 * 
 *  2 . Ecrire un commentaire d'une ligne qui explique l'exercice 2
 * 
 *  3 . Ecrire un commentaire sur plusieurs lignes pour expliquer la différence entre echo et print
 * 
 *  4 . S'assurer que les commentaires ne sont pas visible sur le navigateur
 */

// cet exercice utilise echo pour afficher un texte et print pour en afficher un autre

/** La différence entre echo et print est minime,
 * 
 * echo accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
 * quelques mots" et ne retourne rien)
 * 
 * print n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
 * true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
 * valeur de vraioufaux sera true (1));
 */


/** Exercice 5 : print_r()
 *  Objectif : savoir utiliser la fonction print_r()
 * 
 *  1 . Créer un fichier print_r_test.php;
 * 
 *  2 . Déclarer un tableau associatif $personne avec les clés 'nom' et 'age' (les valeurs sont libre de choix)
 * 
 *  3 . Utiliser print_r() avec en paramètre le tableau pour afficher le contenu du tableau
 * 
 */


/** Exercice 6 : var_dump()
 *  Objectif : savoir utiliser la fonction var_dump()
 * 
 *  1 . Créer un fichier var_dump_test.php;
 * 
 *  2 . Créer une variable $nombre avec une valeur numerique et $str avec une valeur string;
 * 
 *  3 . Utiliser var_dump() avec en paramètre la variable $nombre et encore une fois var_dump() avec la variable $str;
 * 
 */

/** Exercice 7 : Texte avec HTML
 *  Objectif : générer du texte HTML avec php
 * 
 *  1 . Créer un fichier html_echo.php
 * 
 *  2 . Utiliser echo pour afficher un texte en utilisant les balises suivantes (<b> pour bold = gras, <i> pour italique, <u> souligné) : exemple ("Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>)
 */

/** Exercice 8 : Commentaires et PHP
 * Objectif : ecrire du code php et commenter ce que vous ecrivez
 *
 * 1 . Créer un fichier commentaire_php.php
 *
 * 2 . Ecrire du code à l'interieur, exemple echo("<div>
 *    <h1>Bienvenue</h1>
 *    <h2> sur mon application </h2>
 *</div>");
 *
 * 3 . Inclure des commentaires pour expliquer ce qui y est fait

 */

/** Exercice 9 : Balises PHP dans HTML
 * Objectif : Inclure une date dans le HTML
 *
 * 1 . Créer un fichier php_dans_html.php;
 *
 * 2 . Ecrire du code HTML avec un H1, un H2, et un paragraphe
 *
 * 3 . Utiliser PHP pour récupérer la date d'aujourd'hui et l'inclure dans le paragraphe HTML (chercher sur internet)
 */


/** Exercice 10 : Affichage dynamique
 * Objectif : Afficher dynamiquement du contenu dans notre page HTML
 *
 * 1 . Créer un fichier affichage.php;
 *
 * 2 . Déclarer une variable $message qui contiendra le texte que vous voudrez
 *
 * 3 . Utiliser echo pour générer du HTML, un H1 sera créé et y inclure la variable $message
 */



//  ------------------------------------------------------------------------------------------------------------




/** Exercice 1 : Concaténation simple
 *  
 *  1 . Créer deux variables nom et prenom et affecter les valeurs de son choix
 * 
 *  2 . Concatener ces deux variables pour afficher une chaîne de caractère du nom et prénom complets avec echo
 */

/** Exercice 2 : Concatenation avec des phrases
 * 
 *  1 . Créer une variable phrase1 qui contiendra la chaine de caractères : Le ciel est
 * 
 *  2 . Créer une variable phrase2 qui contiendra la chaine de caractères : bleu aujourd'hui 
 * 
 *  3 . Concatener les deux variables en utilisant variable . variable et afficher le resultat avec echo
 */

/** Exercice 3 : Utilisation de virgules dans echo
 * 
 *  1 . Créer trois variables mot1 qui contiendra : J'aime, mot2 : le et mot3 : PHP
 * 
 *  2 . Utiliser echo pour afficher les trois mots séparés par des virgules plutot que par le point de concatenation ( . )
 * 
 */

/** Exercice 4 : Concatenation avec l'opérateur combiné ".="
 * 
 *  1 . Créer une variable texte avec la valeur : je vais
 * 
 *  2 . Utiliser l'opérateur combiné pour ajouter : à la plage
 * 
 *  3 . Afficher le resultat
 * 
 */

/** Exercice 5 : Echapper les guillemets
 * 
 *  1 . Créer une variable citation qui contiendra la chaine de caractères suivante : 'Il a dit : "Le PHP est fantastique"'
 * 
 *  2 . S'assurer que les guillemets dans la chaine sont correctement échappés pour éviter les erreurs de syntaxe
 * 
 *  3 . Afficher la citation
 * 
 */

/** Exercice 6 : Quotes simples et doubles
 * 
 *  1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
 * 
 *  2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
 * 
 *  3 . Faire la même chose mais avec des quotes simple et observer la différence
 * 
 */


/** Exercice 7 : Utilisation de variables dans les chaines
 * 
 *  1 . Créer une variable nom avec une valeur.
 * 
 *  2 . Utiliser echo pour afficher une phrase qui dit : "Bonjour, (nom), bienvenue sur notre site!", en utilisant la variable nom à la place de (nom)
 */

/** Exercice 8 : Concaténation et guillemets
 * 
 *  1 . Créer une variable citation contenant la phrase suivante : 'la vie est belle'
 * 
 *  2 . Concatener cette phrase avec une deuxième chaine qui dit : ', surtout quand on code en PHP!'
 * 
 *  3 . Afficher la phrase complete en entourant le tout de guillemets doubles
 */

/** Exercice 9 : Concaténation et opérations mathématique
 * 
 *  1 . Créer deux variables a et b qui contiendront les nombres 5 et 10
 * 
 *  2 . Utiliser la concaténation pour afficher une phrase comme : "La somme de 5 et 10 est 15" (en remplaçant 5 et 10 par les variables et 15 par le calcul de ces deux variables)
 * 
 */

//-------------------------------------------------------------------------------------------------------------------------

/** Exercice 1 : Opérateurs de base
 *  Objectif : calculer des variables avec les opérateurs de base
 * 
 * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
 * 
 * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
 */

$a = 1345;
$b = 1420;

$addition = $a + $b;
echo "Addition ($a + $b) = $addition<br>";

/** Exercice 2 : Opération combinées
 *  Objectif : calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
 */

/** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
 *
 * 1 . Déclarer une variable $counter initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . Réinitialiser $counter à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

 $compteur = 10;
echo "Valeur initiale de \$compteur : 10<br>";
echo "Après incrémentation avec ++\$compteur : " . ++$compteur . "<br>";

$compteur = 10;
echo "Après décrémentation avec --\$compteur : " . --$compteur . "<br>";


/** Exercice 4 : Incrémentation et décrémentation (postfixe = $variable++)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
 * 
 * 1 . Déclarer une variable $num initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . réinitialiser $num à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */

 $num = 10;


/** Exercice 5 : Calcul des Ages
 *  Objectif : Simuler un anniversaire
 * 
 * 1 . Déclarer une variable $age initialisée à votre age;
 * 
 * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; (postfixe)
 * 
 * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
 */

/** Exercice 6 : Calcul d'une moyenne
 *  Objectif : Calculer la moyenne de trois variables différentes
 * 
 * 1 . Déclarer 3 variables $note1,$note2,$note3 avec des valeurs entre 1 et 20 ;
 * 
 *  2 . Calculer la moyenne des trois notes en utilisant les opérateurs arithmétiques (afficher le résultat);
 * 
 * 3 . utiliser l'opérateur d'affectation combiné pour ajouter une nouvelle note à la moyenne et afficher le résultat
 */

/** Exercice 7 : Modulo
 *  Objectif : Calculer avec l'opérateur modulo
 * 
 * 1 . Déclarer une variable $total initialisée à 37;
 * 
 * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
 * 
 * 3 . Afficher un message qui dit si $total est pair ou impair
 * 
 */

/** Exercice 8 : Panier d'achats 
 *  Objectif : Gérer les quantités d'un panier d'articles
 * 
 *  1 . Déclarer une variabler $quantity initialisée à 5;
 * 
 *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
 * 
 *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
 * 
 * Afficher le résultat
 */

/** Exercice 9 : Conversion d'unités
 *  Objectif : Convertir des KM en Miles
 * 
 *  1 . Déclarer une variable $kilometres initialisée à 100;
 * 
 *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
 * 
 */

/** Exercice 10 : Jeu
 *  Objectif : Calculer les points dans un jeu en incrémentant et décrémentant
 * 
 *  1 . Déclarer une variable $score initialisée à 50;
 * 
 *  2 . Ajouter 10 points à $score;
 * 
 *  3 . Retirer 5 points à score
 */