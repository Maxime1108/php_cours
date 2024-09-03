<?php

// pour les exercices, vous allez créer une table dans la BDD societe qui s'appelera, dirigeants

/** Cette table contiendra
 * 
 *  'id'(INT,clé primaire, auto-incrémentée)
 *  'prenom'(VARCHAR,255)
 *  'nom'(VARCHAR,255)
 *  'poste'(VARCHAR,255)
 *  'salaire'(FLOAT)
 *  'date_embauche'(DATE)
 */

/** Exercice 1 : Connexion à une base de données 
 * 
 *  Objectif : Se connecter à notre BDD
 * 
 *  1 . Commencer par utiliser l'objet PDO pour se connecter à la base de donnée MySQL (ou MySQLi si vous preférez)
 * 
 *  2 . S'assurer de gérer les erreurs de connexion de manière appropriée en affichant un message d'erreur si la connexion echoue
 */

echo '<h2> Exercice 1 : Connexion à une base de données </h2>';

$pdo = new PDO('mysql:host=localhost;dbname=societe', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'
]);


/** Exercice 2 : Insérer des données avec exec()
 * 
 *  Objectif : insérer des données dans la BDD 
 * 
 *  1 . Utiliser la méthode exec() pour insérer un nouvel dirigeant dans la table dirigeants. Afficher le nombre de lignes affectées par l'insertion et l'id du dirigeant inséré
 * 
 *  C'est normal si à chaque rechargement vous vous retrouvez avec une entrée supplémentaire en BDD, PHP va réexécuter le code de cette page et donc réinsérer
 * 
 */

echo '<h2> Exercice 2 : Insérer les données avec exec()</h2>';

// $resultat = $pdo->exec("INSERT INTO dirigeants (prenom,nom,poste,salaire,date_embauche) VALUES ('Corrine','Martin','PDG',3700,'2001-09-02')");

// echo "Le nombre de ligne affectées : $resultat <br>";
// echo "Le dernier ID généré par la BDD : " . $pdo->lastInsertId();



/** Exercice 3 : Récupérer et afficher l'enregistrement avec query()
 * 
 *  Objectif : récupérer notre dirigeant de la BDD
 * 
 *  1 . Utiliser query() pour séléectionner les informations d'un dirigeant spécifique dans la table 'employes' (par exemple, par son prenom)
 * 
 *  2 . Afficher les résultats sous forme de tableau associatif en utilisant fetch(PDO::FETCH_ASSOC)
 * 
 */
$sql = "SELECT * FROM dirigeants WHERE prenom = 'Corrine'";

$request = $pdo->query($sql); // vous pouvez mettre la requête directement dans query('SELECT * FROM dirigeants WHERE prenom = 'Corrine')

$resultat = $request->fetchAll(PDO::FETCH_ASSOC);

echo "Voici les informations sur les Corrine de la BDD : <br>";
foreach ($resultat as $result) {
    echo "
        nom : $result[nom],
        prenom : $result[prenom],
        salaire : $result[salaire],
        poste : $result[poste],
        date d'embauche : $result[date_embauche]
        <br>";
}


/** Exercice 4 : Affichage avec différents types de fetch
 * 
 * Objectif : Reprendre l'exercice précédent
 * 
 *  1 . Modifier le fetch(PDO::xxx) pour le remplacer par les trois autres types : FETCH_NUM,FETCH_ASSOC et FETCH_OBJ, Analyser et comparer
 * 
 */

$sql = "SELECT * FROM dirigeants WHERE prenom = 'Corrine'";

$request = $pdo->query($sql);

$resultat = $request->fetchAll(PDO::FETCH_BOTH);


foreach ($resultat as $result) {
    echo "l'id des corrine est $result[0] <br>"; // 0 = premier element du tableau, l'id
    echo "le prenom des corrines est : $result[prenom]<br>";
}



/** Exercice 5 : Récupérer tous les enregistrements avec fetchAll()
 * 
 * Objectif : Récupérer toutes les lignes d'une table 
 * 
 *  1 . Récuperer les enregistrements de la table dirigeants avec fecthAll(PDO::FETCH_ASSOC)
 * 
 *  2 . Afficher les données dans un tableau HTML (vous pouvez reprendre celui du cours)
 * 
 *  3 . S'assurer que chaque dirigeant est affiché sur une ligne distincte
 * 
 */

$sql = "SELECT * FROM dirigeants";

$request = $pdo->query($sql);

$resultat = $request->fetchAll(PDO::FETCH_ASSOC);


echo '<table border="1">';


// Affichage des lignes :
foreach ($resultat as $result) {
    echo '<tr>';
    echo "<td> $result[prenom] </td>";
    echo "<td> $result[nom] </td>";
    echo "<td> $result[salaire] </td>";
    echo '</tr>';
}

echo '</table>';

/** Exercice 6 : Utilisation de requêtes préparées avec bindParam()
 * 
 *  Objectif : Sécuriser l'envoi de nos données à la BDD avec des requêtes préparées
 * 
 *  1 . Créer une requête pour selectionner un dirigeant par son nom
 * 
 *  2. Utiliser bindParam() pour lier les valeurs des paramètres et afficher les informations du dirigeant
 * 
 * 
 */
echo '<h2> Exercice 6 : utilisation des requêtes préparées </h2>';
$sql = "SELECT * FROM dirigeants WHERE nom = :nom AND prenom = :prenom";
$param1 = 'Martin';
$param2 = 'Corrine';

// Plusieurs façons de faire :  1 

$request = $pdo->prepare($sql);
$request->bindParam(':nom', $param1, PDO::PARAM_STR);
$request->bindParam(':prenom', $param2, PDO::PARAM_STR);

$request->execute();

// Façon 2 : 
$sql = "SELECT * FROM dirigeants WHERE nom = ? AND prenom = ? ";
$request = $pdo->prepare($sql);
$request->bindParam(1, $param1);
$request->bindParam(2, $param2);

// Façon 3 : Sans bindParam

$sql = "SELECT * FROM dirigeants WHERE nom = ? AND prenom = ?";
$request = $pdo->prepare($sql);

$request->execute(['Martin', 'Corrine']); // où (array('Martin','Corrine'))

// Façon 4 : Sans bindParam

$sql = "SELECT * FROM dirigeants WHERE nom = :nom AND prenom = :prenom";

$request = $pdo->prepare($sql);

$request->execute([':nom' => 'Martin', ':prenom' => 'Corrine']);


/** Exercice 7 : Requêtes préparées avec bindValue()
 * 
 * Objectif : Reprendre l'exercice précédent et refaire la même chose à la place de bindParams()
 * 
 * Modifier la valeur du paramètre pour observer le comportement de la requête
 * 
 */
echo '<h2> Exercice 7 : Requêtes préparées avec bindValue </h2>';

$sql = "SELECT * FROM dirigeants WHERE nom = :nom AND prenom = :prenom";

$param3 = "Martin";
$param4 = "Corrine";

$request = $pdo->prepare($sql);

$request->bindValue(':nom', $param3, PDO::PARAM_STR);
$request->bindValue(':prenom', $param4, PDO::PARAM_STR);

$param4 = 'Mathilde';

$request->execute();

/** Exercice 8 : Utilisation des marqueurs "?" dans une requête préparée
 * 
 *  Objectif : utiliser les marqueurs ? pour préparer nos valeurs 
 * 
 *  1 . Creer une requête pour séléctionner un dirigeant par son nom ET son prénom
 * 
 *  2 . Utiliser bindValue() ou passer directement les valeurs via un tableau dans la fonction execute()
 * 
 *  3 . Afficher les résultats
 */

echo '<h2> Exercice 8 : Utilisation des marqueurs ? </h2>';

$sql = "SELECT * FROM dirigeants WHERE nom = ? AND prenom = ?";

$request = $pdo->prepare($sql);

$request->execute(['Martin', 'Corrine']);

$resultat = $request->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultat as $r) {
    echo "$r[prenom] <br>";
}