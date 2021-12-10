<?php

// Variables

empty($var) //envoie vrai si la variable existe
isset($var) //renvoie vrai si la variable existe
gettype($var) //retourne le type de la variable
settype($var, type) //convertit la variable en type
is_long($var) //détermine si la variable est un nombre entier
is_double($var) //Détermine si une variable est de type nombre décimal
is_string($var) //détermine si une variable est une chaine de caractere
is_array($var) //Détermine si une variable est un tableau
is_object($var) //Détermine si une variable est de type objet
is_bool($var) //Détermine si une variable est un booléen* 
is_float($var) //Détermine si une variable est de type nombre décimal
is_numeric($var) //Détermine si une variable est un nombre ou une chaîne numérique
is_integer($var) //Détermine si une variable est de type nombre entier
is_int($var) //détermine si la variable est un nombre entier

settype($bleu, "integer");
echo $_SERVER["SERVER_NAME"];//Afficher nom du server
echo $_SERVER["SERVER_PROTOCOL"];// afficher le protocol du serveur
echo $_SERVER["REQUEST_METHOD"];//afficher la methode de requete
echo $_SERVER["QUERY_STRING"];// 
echo $_SERVER["HTTP_USER_AGENT"];//afficher des informations du navigateur

$argv // Tableau des arguments passés au script. 
$argc // Contient le nombre de paramètres de la ligne de commande passés au script 
$PHP_SELF // Le nom du fichier du script en cour d’exécution, 
$HTTP_COOKIE_VARS // Un tableau associatif 
$HTTP_GET_VARS // Un tableau associatif 
$HTTP_POST_VARS // Un tableau associatif

–$_PATH // Chemin d’exécution du fichier.
–$_POST // Variable auto_globale qui contient toutes les données envoyées par la méthode POST. 
–$_GET // Variable auto_globale qui contient toutes les données envoyées par la méthode GET. 
–$_REQUEST // Si vous ne souhaitez pas vous embarrasser de la méthode utilisée. Elle contient un mélange des données de GET, POST, COOKIE et FILE. 


// fonctions mathématiques

abs($x) // valeur absolue 
ceil($x) // arrondi supérieur 
floor($x) // arrondi inférieur 
pow($x, $y) // x exposant y 
round($x,$i) // arrondi de x à la décimale n°i 
max($a, $b, $c, ...) // retourne l’argument de valeur maximum 
Pi() // retourne la valeur de Pi


// fonction chaine des caracteres

strlen($str) // retourne le nombre de caractère
strtolower()// conversion en minus
strtoupper()// conversion maj 
trim($str) // Suppression des espaces de début et de fin de chaîne 
substr($str,$i,$j) // Retourne une sous chaîne de $str de taille $j à partir de la position $i
strncmp($str1,$str2) // Comparaison de deux chaînes

// fonctions d'affichage

printf($var)// Affiche une chaîne de caractères formatée
print_r() //affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible.
var_dump() // affiche les informations structurées d'une variable, y compris son type et sa valeur. Les tableaux et les objets sont explorés récursivement, avec des indentations, pour mettre en valeur leur structure.
printf([$format, $arg1, $arg2]) // écriture formatée

// fonctions de tableaux

count($tab) sizeof($tab) // retourne le nombre d’éléments du tableau. 
in_array($var,$tab) // indique si la valeur $var existe dans le tableau $tab. 
list($var1, $var2, ...) // transforme une liste de variables en tableau. 
sort($tab) // trie alphanumérique des éléments du tableau. 
rsort($tab) // trie alphanumérique inversé. 

// fonctions de tableaux associatifs 

array_count_values($tab) // retourne le nombre d’éléments du tableau. 
array_keys($tab) // retourne un tableau contenant les clés du tableau associatif. 
array_values($tab) // retourne un tableau contenant les valeurs du tableau associatif. 
array_search($val, $tab) // retourne la clé associé à la valeur recherchée


// fonction formulaire
session_start — Démarre une nouvelle session ou reprend une session existante

// on accede a sa valeur
$_POST["pseudo"] // Valeur == "Baptiste" 


$cookie_name = “articles_consultes”;
$cookie_value =[1,7,9]
setcookie($cookie_name, $cookie_value, time() + (86400*30))
$_COOKIE[“articles_consultes”];


htmlspecialchars()
strip_tags()//retire les balises