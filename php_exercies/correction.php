<?php

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

echo 'Hello world, Bienvenue sur mon premier script PHP';

?>

<?php

/** Exercice 2 : Echo et Print 
 *  Objectif : comprendre la différence entre echo et print
 * 
 *  1 . Créer un fichier PHP nommé affichage.php;
 * 
 *  2 . Utiliser echo pour afficher le texte : Bonjour tout le monde !. Suivi d'un saut de ligne
 * 
 *  3 . Utiliser ensuite print pour afficher le texte : Aujourd'hui, nous sommes le (date d'aujourd'hui + mois d'aujourd'hui). Suivi d'un saut de ligne
 */

echo 'Bonjour tout le monde ! <br>';

print 'Nous sommes le 19/08/2024 <br>';

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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ceci est mon titre</h1>
    <?php echo '<p> Ceci est mon paragraphe </p>'; ?>
</body>

</html>

<?php

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

// On devait créer un fichier, et afficher un texte avec echo

/**
 *  echo peut prendre plusieurs chaines de caractères à la suite comme argument 
 * 
 *  echo 'Sirine','fait','l\'exercice','4';
 * 
 *  print ne prend qu'un argument et a une valeur de retour
 * 
 *  $ouiOuNon = print 'n\'importe quoi';
 *  
 *  $ouiOuNon retournera true en valeur;
 */

/** Exercice 5 : print_r()
 *  Objectif : savoir utiliser la fonction print_r()
 * 
 *  1 . Créer un fichier print_r_test.php;
 * 
 *  2 . Déclarer un tableau $personne avec les clés 'nom' et 'age' (les valeurs sont libre de choix)
 * 
 *  3 . Utiliser print_r() avec en paramètre le tableau pour afficher le contenu du tableau
 * 
 */

$personne = ['nom', 'age'];

print_r($personne);
print '<br>';
var_dump($personne);

$tabAssoc = [
    'nom' => 'Valerie',
    'age' => 30
];
echo '<br>';
print_r($tabAssoc);

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

$nombre = 10;
$str = 'chaine';
echo '<br>';
var_dump($nombre);
echo '<br>';
var_dump($str);
echo '<br>';
print_r($nombre);

/** Exercice 7 : Texte avec HTML
 *  Objectif : générer du texte HTML avec php
 * 
 *  1 . Créer un fichier html_echo.php
 * 
 *  2 . Utiliser echo pour afficher un texte en utilisant les balises suivantes (<b> pour bold = gras, <i> pour italique, <u> souligné) : exemple ("Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>)
 */
echo '<br>';
echo '<b><i><u> Ceci est mon paragraphe gras en italique et souligné</u></i></b>';
echo '<br>';
echo 'Ceci est mon paragraphe <b>gras</b> en <i>italique</i> et <u>souligné</u>';

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
?>
<!-- On créer notre base HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- On écrit notre script PHP dans notre HTML -->
    <?php echo '<div> <h1> Bienvenue </h1> <h2> sur mon application </h2> </div>';
    ?>
</body>

</html>
<?php
/** Exercice 9 : Balises PHP dans HTML
 * Objectif : Inclure une date dans le HTML
 *
 * 1 . Créer un fichier php_dans_html.php;
 *
 * 2 . Ecrire du code HTML avec un H1, un H2, et un paragraphe
 *
 * 3 . Utiliser PHP pour récupérer la date d'aujourd'hui et l'inclure dans le paragraphe HTML (chercher sur internet)
 */

echo '<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo '<h1>Bienvenue sur ma page</h1><h2> Apprendre à intégrer du php dans du html </h2>';
    $date = date('d-m-Y');
    echo '<p> aujourd\'hui on est le ', $date, '</p>';
    ?>
</body>

</html>


<?php

/** Exercice 10 : Affichage dynamique
 * Objectif : Afficher dynamiquement du contenu dans notre page HTML
 *
 * 1 . Créer un fichier affichage.php;
 *
 * 2 . Déclarer une variable $message qui contiendra le texte que vous voudrez
 *
 * 3 . Utiliser echo pour générer du HTML, un H1 sera créé et y inclure la variable $message
 */

$message = 'je suis Jawad';

echo "<h2>$message</h2>";
?>

<h2><?php echo $message; ?></h2>
<h2><?= $message ?></h2>


<?php

/** Exercice 1 : Concaténation simple
 *  
 *  1 . Créer deux variables nom et prenom et affecter les valeurs de son choix
 * 
 *  2 . Concatener ces deux variables pour afficher une chaîne de caractère du nom et prénom complets avec echo
 */

$nom = 'dupont';
$prenom = 'roger';

echo $nom . ' ' . $prenom;
echo "<br> $nom $prenom";

/** Exercice 2 : Concatenation avec des phrases
 * 
 *  1 . Créer une variable phrase1 qui contiendra la chaine de caractères : Le ciel est
 * 
 *  2 . Créer une variable phrase2 qui contiendra la chaine de caractères : bleu aujourd'hui 
 * 
 *  3 . Concatener les deux variables en utilisant variable . variable et afficher le resultat avec echo
 */

$phrase1 = 'Le ciel est';
$phrase2 = 'bleu aujourd\'hui';

echo "<br> $phrase1 " . "$phrase2";
echo "<br> $phrase1 $phrase2";
echo "<br>";
echo $phrase1 . ' ' . $phrase2;

/** Exercice 3 : Utilisation de virgules dans echo
 * 
 *  1 . Créer trois variables mot1 qui contiendra : J'aime, mot2 : le et mot3 : PHP
 * 
 *  2 . Utiliser echo pour afficher les trois mots séparés par des virgules plutot que par le point de concatenation ( . )
 * 
 *  j'aime le php 
 */

$mot1 = 'J\'aime ';
$mot2 = 'le ';
$mot3 = 'PHP ';

echo '<br>' . $mot1, $mot2, $mot3;
print "<br> $mot1 $mot2 $mot3";

/** Exercice 4 : Concatenation avec l'opérateur combiné ".="
 * 
 *  1 . Créer une variable texte avec la valeur : je vais
 * 
 *  2 . Utiliser l'opérateur combiné pour ajouter : à la plage
 * 
 *  3 . Afficher le resultat
 * 
 */

$str1 = 'salut,';
$str1 .= 'coucou';
echo "<br>$str1<br>";

$text = 'je vais';
$text .= ' à la plage';
echo "$text<br> ";

/** Exercice 5 : Echapper les guillemets
 * 
 *  1 . Créer une variable citation qui contiendra la chaine de caractères suivante : 'Il a dit : "Le PHP est fantastique"'
 * 
 *  2 . S'assurer que les guillemets dans la chaine sont correctement échappés pour éviter les erreurs de syntaxe
 * 
 *  3 . Afficher la citation
 * 
 */

$citation = 'Il a dit "Le PHP est fantastique"';

echo "$citation <br>";

/** Exercice 6 : Quotes simples et doubles
 * 
 *  1 . Créer une variable mot qui contiendra la chaine de caractères : PHP
 * 
 *  2 . Utiliser echo pour afficher cette variable à l'interieur d'une chaine entourée de quotes doubles (exemple : echo "le mot est : $mot")
 * 
 *  3 . Faire la même chose mais avec des quotes simple et observer la différence
 * 
 */

 $mot = 'PHP';

 echo 'le mot est : $mot <br>';
 echo "le mot est : $mot <br>";

 /** Exercice 7 : Utilisation de variables dans les chaines
 * 
 *  1 . Créer une variable nom avec une valeur.
 * 
 *  2 . Utiliser echo pour afficher une phrase qui dit : "Bonjour, (nom), bienvenue sur notre site!", en utilisant la variable nom à la place de (nom)
 */

 $nom = 'Gregory';
 print "Bonjour, $nom, bienvenu sur notre site! <br>";

/** Exercice 8 : Concaténation et guillemets
 * 
 *  1 . Créer une variable citation contenant la phrase suivante : 'la vie est belle'
 * 
 *  2 . Concatener cette phrase avec une deuxième chaine qui dit : ', surtout quand on code en PHP!'
 * 
 *  3 . Afficher la phrase complete en entourant le tout de guillemets doubles
 */

$citation = '"la vie est belle';
echo '<br>';
$citation .= ', surtout quand on code en php !"'; // La variable gardera ses guillemets même si on en veut plus

echo '"' ."$citation" . '"';

/** Exercice 9 : Concaténation et opérations mathématique
 * 
 *  1 . Créer deux variables a et b qui contiendront les nombres 5 et 10
 * 
 *  2 . Utiliser la concaténation pour afficher une phrase comme : "La somme de 5 et 10 est 15" (en remplaçant 5 et 10 par les variables et 15 par le calcul de ces deux variables)
 * 
 */

$a = 5;
$b = 10;

$phrase = 'La somme de 5 et 10 est : ';
echo '<br>';

echo $a + $b; // solution 1 : ecrire directement le resultat du calcul
$c = $a + $b; // solution 2 : créer une variable pour stocker le resultat
$phrase .= $c;  // solution 3 : concatener dans la phrase elle même
echo '<br>';
echo $phrase;

// echo '<br>';
// echo $phrase . ($a + $b);
// echo "$phrase $c";