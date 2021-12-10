<?php

// Excercice 1

function jeRetourneMonArgument($param){
    return $param;
}

echo jeRetourneMonArgument("mon argument");
echo "<br>\n";


// Excercice 2

function concatenationAvecEspace($chaine1, $chaine2){
    return $chaine1." ".$chaine2;
}

echo concatenationAvecEspace("Jules","César");
echo "<br>\n";


// Excercice 3

function recupererNombreCaracteresSansEspaces($chaine){
    return strlen(trim($chaine));    
}

echo recupererNombreCaracteresSansEspaces("  test  ");
echo "<br>\n";


// Excercice 4

function estChaineDeCaractere($chaine){
    return is_string($chaine);
}

echo "Test est une chaine de caractère : ".estChaineDeCaractere("test");
echo "<br>\n";



// Excercice 1

function multiplier($nombre1, $nombre2){
    return $nombre1*$nombre2;
}

echo "Mutiplier 5 * 3 = ".multiplier(5,3);
echo "<br>\n";


// Excercice 1

function calculerPrixTTC($prixHT, $tva){
    return $prixHT - ($prixHT * $tva);    
}

echo "Le prix TTC de 15€ à 20% de TVA est : ".calculerPrixTTC(15,0.20);
echo "<br>\n";


// Excercice 1

function calculerMoyenne($note1, $note2, $note3){
    return ($note1 * $note2 * $note3)/3;
}

echo "La moyenne des notes 10, 12 et 15 est de : ".calculerMoyenne(10,12,15);
echo "<br>\n";


// Excercice 1

function modulo($entier, $diviseur){
    return $entier%$diviseur;
}

echo "Le modulor de 36 par 4 est : ".modulo(36,4);
echo "<br>\n";


// Excercice 1

function quelleEtapeJournee($heure){
    if($heure < 12){
        return "C'est le matin";
    } elseif($heure < 24){
        return "C'est l'aprés-midi";
    } else {
        return "Erreur";
    }
}

echo quelleEtapeJournee(13);
echo "<br>\n";


function trouverCapitale($pays){
    switch($pays){
        case "France":
            return "Paris";
        case "Angleterre":
            return "Londres";
        case "Allemagne" : 
            return "Berlin";
        case "Italie" :
            return "Rome";
        default:
            return "Inconnu";
    }
}

echo "La capitale de l'allemagne est : ".trouverCapitale("Allemagne");
echo "<br>\n";

// Découper la fonction en 2 permet de simplifier la double boucle
function afficherPyramideNombres($nombre){
    $resultat = "";
    for($iterateur = 1; $iterateur < $nombre; $iterateur++){
        $resultat .= afficherNombreNFois($iterateur)."\n";
    }
    return $resultat;
}

function afficherNombreNFois($nombre){
    $resultat = "";
    for($iterateur = 0; $iterateur<$nombre; $iterateur++){
        $resultat .= $nombre;
    }
    return $resultat;
}

echo afficherPyramideNombres(5);
echo "<br>\n";

function calculerTempsDoublementPrix($prixInitial, $tauxAugmentationAnnuelle){
    $prixDouble = $prixInitial *2;
    $compteur = 0;
    while($prixInitial < $prixDouble){
        $compteur++;
        $prixInitial += $prixInitial * $tauxAugmentationAnnuelle;
    }
    return $compteur;
}

echo "Il faut ".calculerTempsDoublementPrix(130000, 0.03)." ans pour qu'un bien immobilier de 130.000€ double de prix avec un taux de 3% d'augmentation annuelle";
echo "<br>\n";


function afficherTableau($tableau){
    $resultat = "[";

    foreach($tableau as $champ){
        $resultat .= $champ.", ";
    }

    return $resultat."]";
}

$tableau = ["Fraise", "Pomme", "Poire"];
echo afficherTableau($tableau);
echo "<br>\n";

function genererNombreAleatoire($valeurMax){
    $resultat = array();
    for($i=0;$i<10;$i++){
        $resultat[$i] = rand(0,$valeurMax);
    }
    return $resultat;
}

$tableau_nombres = genererNombreAleatoire(10);
print_r($tableau_nombres);

function verifierPresenceNombre($nombre, $tableau){
    $resultat = false;
    for($i=0; $i<sizeof($tableau); $i++){
        if($tableau[$i] == $nombre){
            return true;
        }
    }
    return false;
}

if(verifierPresenceNombre(5, $tableau_nombres)){
    echo "Le nombre 5 est présent dans le tableau";
} else {

    echo "Le nombre 5 n'est pas présent dans le tableau";
}
echo "<br>\n";

function ecrireListeHTML($tableau){
    $resultat = "<ul>";
    foreach($tableau as $champ){
        $resultat .= "<li>$champ</li>";
    }
    return $resultat."</ul>";
}

echo ecrireListeHTML($tableau);
echo "<br>\n";

function ecrireTableMultiplication($entier){
    $resultat = "<table>";
    for($i=1; $i<= $entier; $i++){
        $resultat .= "<tr>";

        for($j=1; $j <= 10; $j++){
            $resultat .= "<td> ".($i*$j)."</td>";
        }

        $resultat .= "</tr>";
    }
    $resultat .= "</table>";
    return $resultat;
}

echo ecrireTableMultiplication(10);
echo "<br>\n";

function afficherDetailNavigateur(){
    return $_SERVER["HTTP_USER_AGENT"];
}

echo afficherDetailNavigateur();
echo "<br>\n";

function recupererNomUtilisateur(){
    if(isset($_GET["nomUtilisateur"])){
        return $_GET["nomUtilisateur"];
    }
    return "Aucun utilisateur";
}

echo recupererNomUtilisateur();
echo "<br>\n";

//A terminer
/*function supprimerDoublons($tableau){
    $nouveauTableau = array();
    foreach($tableau as $cle => $champ){
        for($i = $cle +1; $i < sizeof($tableau); $i++){
            if($champ == $tableau[$i]){
                $tableau[$i]
            }
    }
}*/


function calculerFactorielle($entier){
    if($entier == 1){
        return 1;
    } else {
        return $entier * calculerFactorielle($entier - 1);
    }
}

echo "La factorielle de 5 est : ".calculerFactorielle(5);
echo "<br>";

?>