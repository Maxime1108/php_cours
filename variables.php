<?php

// Les variables

// Type "basique" de variable

$number = 10;
$string = 'ceci est une chaine de caracteres';
$float = 3,10;
$tab = ['Freddy', 'Bonnie'];
$tab = array('Freddy', 'Bonnie');
$boolean = true, // false;

$nullos = null;

$ceciEstMaVariable = false;   

echo 'chaine de caracteres';
echo '<br>';
echo $number;
echo '<br>';
echo gettype($number);
echo '<br>';
echo $string;
echo '<br>';
echo gettype($string);
echo '<br>';
echo $float;
echo '<br>';
echo gettype($float);

echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($tab);
echo '</pre>';

echo '<hr>';
print_r($tab);

// Les constantes 
define('PRENOM','Valerie');
// const PRENOM = 'Valerie';
const NOM = 'Dupont';

echo '<br>';
echo 'Cette personne s\'appelle';
echo PRENOM;
echo '<br>';

// define('PRENOM','Florence'); impossible de rÃ©affecter une valeur