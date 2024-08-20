<?php 

/*
QCM : Les Conditions en PHP (if, else, switch)

Mettez juste un X derriere la réponse choisie


Question 1 :
Quel mot-clé est utilisé pour commencer une condition en PHP ?

A) if X
B) switch
C) else
D) elseif


Question 2 :
Que signifie l'expression if ($a == $b) ?

A) $a est strictement égal à $b
B) $a est différent de $b
C) $a est égal à $b X
D) $a est inférieur à $b


Question 3 :
Quel mot-clé est utilisé pour ajouter une condition alternative après un if ?

A) else
B) elseif X
C) endif
D) case 


Question 4 :
Quel mot-clé permet de gérer plusieurs alternatives dans une condition unique ?

A) switch X
B) if
C) else
D) default


Question 5 :
Quelle est la syntaxe correcte pour vérifier si une variable $age est supérieure ou égale à 18 ?

A) if $age >= 18
B) if ($age >= 18) X
C) if $age => 18
D) if ($age => 18)


Question 6 :
Que fait l'instruction else dans une structure conditionnelle ?

A) Elle exécute un bloc de code si la condition précédente est fausse. X
B) Elle exécute un bloc de code si la condition précédente est vraie. 
C) Elle termine une boucle.
D) Elle démarre une nouvelle condition.


Question 7 :
Quel mot-clé est utilisé dans une structure switch pour gérer les cas non définis explicitement ?

A) default X
B) else
C) break 
D) case


Question 8 :
Quel est le rôle de break dans une structure switch ?

A) Il termine l'exécution du script.
B) Il arrête la boucle ou le switch. X
C) Il retourne une valeur.
D) Il vérifie la prochaine condition.


Question 9 :
Quelle est la différence entre == et === en PHP ?

A) == compare les valeurs, === compare les valeurs et les types.
B) == compare les types, === compare uniquement les valeurs.
C) == est utilisé dans les switch, === dans les if. X
D) Il n'y a pas de différence.


Question 10 :
Comment écrire une condition ternaire en PHP ?

A) $result = ($a > $b) ? $a : $b;
B) $result = if($a > $b) $a else $b;
C) $result = $a > $b ? $a else $b; X
D) $result = ($a > $b) if $a else $b;


Question 11 :
Que signifie l'instruction elseif ?

A) C'est une alternative à else.
B) Elle permet de vérifier une nouvelle condition si la première est fausse. X
C) Elle termine une condition.
D) Elle est équivalente à if.


Question 12 :
Dans quel cas utiliseriez-vous switch au lieu de if ?

A) Lorsque vous avez plusieurs valeurs possibles pour une variable et que vous voulez exécuter du code différent pour chaque valeur. X
B) Lorsque vous voulez vérifier une seule condition.
C) Lorsque vous voulez vérifier des valeurs de type booléen.
D) Lorsque vous voulez exécuter du code dans tous les cas.


Question 13 :
Que se passe-t-il si vous omettez le break dans un switch ?

A) Tous les cas suivants seront exécutés jusqu'à ce qu'un break soit trouvé. X
B) Le code générera une erreur.
C) La première condition sera exécutée puis le script s'arrêtera.
D) Rien, le break est optionnel.


Question 14 :
Quel est l'effet d'un return à l'intérieur d'une condition if ?

A) Il arrête l'exécution de la fonction actuelle et retourne une valeur. X
B) Il continue l'exécution du script.
C) Il redémarre la boucle. 
D) Il arrête le script entier.


Question 15 :
Quelle condition est vraie pour l'instruction if (0) ?

A) Faux
B) Vrai
C) Cela dépend du contexte
D) Génère une erreur


Question 16 :
Comment vérifier si une variable $x est différente de 10 ?

A) if ($x != 10)
B) if ($x !== 10)
C) if ($x <> 10)
D) Toutes les réponses ci-dessus sont correctes.


Question 17 :
Quel est le rôle du mot-clé default dans une structure switch ?

A) Exécuter un bloc de code lorsque aucun autre cas ne correspond.
B) Arrêter l'exécution du script.
C) Passer à la prochaine instruction.
D) Retourner une valeur par défaut.


Question 18 :
Que fait l'instruction else si elle est utilisée seule sans if préalable ?

A) Cela génère une erreur de syntaxe.
B) Elle est ignorée par le compilateur.
C) Elle est exécutée de manière indépendante.
D) Elle vérifie la condition suivante.
Question 19 :
Quelle est la sortie de ce code ?

    $x = 5;
    if ($x == 5) {
        echo "Cinq";
    } else {
        echo "Pas cinq";
    }

A) Cinq
B) Pas cinq
C) Erreur
D) Rien n'est affiché


Question 20 :
Quel opérateur est utilisé pour tester plusieurs conditions à la fois avec un if ?

A) &&
B) ||
C) AND
D) Toutes les réponses ci-dessus sont correctes.

*/