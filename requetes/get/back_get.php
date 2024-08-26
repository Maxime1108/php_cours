<?php

// Les superglobales : $_GET
// Les superglobales sont toujours des tableaux associatifs, $_GET a été remplie lors
var_dump($_GET);

echo '<br>';
// Si $_GET n'est pas vide ET que la requête est bien GET 
if (!empty ($_GET) && $_SERVER ['REQUEST_METHOD'] ==
"GET") {
    $color = $_GET['color'];

    switch ($color) {
        case 'violette':
            header('Location : page_produit.php');
            break;
            default;
            header("Location : error.php")
    }
}