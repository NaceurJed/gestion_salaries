<?php
require_once "Employe.php";
require_once "Technicien.php";

/************** CREATION D'UN NOUVEAU SALARIE dés le début */
//il aurait fallu faire une table qui stock tous les employés et technicien comme l'exo sur les listeCourses (get_class pour trouver la class d'un objet)

/***** Saisie du statut du salarié *****/
do {
    echo "*********** Création nouveau salarié ************\n";
    echo "Création nouveau employé.....: 1\n";
    echo "Création nouveau technicien..: 2\n";
    $reponse = readline("Réponse: ");
    
} while ($reponse != "1" && $reponse != "2");

/***** Création du salalrié en fonction de son statut *****/

if ($reponse == "1") {
    /***** Création d'un employé *****/
    creationEmploye();
    $$nomE = new Employe($nomE, $ageE, $salaireE, $numSecuE, $gradeE);
    
} else {
    /***** Création d'un technicien ****/
    creationTechnicien();
    $$nomT = new Technicien($nomT, $ageT, $salaireT, $numSecuT, $gradeT);
}


do {
    menu();

switch ($reponse) {
    //Afficher info employé
    case '1':
        echo "\n*********** Info employé ************\n"; 
        $nomEmploye = readline("Tapez le nom de l'employé: ");
        $grade = $$nomEmploye->getGrade();
        if ($grade != null) {
            echo "Cet employé n'existe pas.";
        } else {
            $$nomEmploye->toString();
        }
        break;

    //Afficher info technicien
    case '2':
        echo "\n*********** Info technicien ************\n";
        $nomTechnicien = readline("Tapez le nom du technicien: ");
        $grade = $$nomTechnicien->getGrade();
        if ($grade != null) {
            $$nomTechnicien->toString();
        } else { 
            echo "Ce technicien n'existe pas.";
        }
        break;
    
    //Augmentation employé
    case '3':
        echo "\n*********** Augmentation employé ************\n";
        $nomEmploye = readline("Tapez le nom de l'employé: ");
        $grade = $$nomEmploye->getGrade();
        if ($grade != null) {
            echo "Cet employé n'existe pas.";
        } else {
            $augmentationEnEuro = readline("Saisir augmentation en Euro: ");
            $$nomEmploye->augmentation($augmentationEnEuro);
        }
        break;
    
    //Augmentation technicien
    case '4':
        echo "\n*********** Augmentation technicien ************\n";
        $nomTechnicien = readline("Tapez le nom du technicien: ");
        $grade = $$nomTechnicien->getGrade();
        if ($grade != null) {
            $augmentationEnEuro = readline("Saisir augmentation en Euro: ");
            $$nomTechnicien->augmentation($augmentationEnEuro);
        } else { 
            echo "Ce technicien n'existe pas.";
        }        
        break;

    //Création nouveau salarié
    case '5':
        do {
            echo "*********** Création nouveau salarié ************\n";
            echo "Création nouveau employé.....: 1\n";
            echo "Création nouveau technicien..: 2\n";
            $reponse = readline("Réponse: ");
            
        } while ($reponse != "1" && $reponse != "2");
        
        /***** Création du salalrié en fonction de son statut *****/
        if ($statutSalarie == "1") {
            /***** Création d'un employé *****/
            creationEmploye();
            $$nomE = new Employe($nomE, $ageE, $salaireE, $numSecuE, $gradeE);
            
        } else {
            /***** Création d'un technicien ****/
            creationTechnicien();
            $$nomT = new Technicien($nomT, $ageT, $salaireT, $numSecuT, $gradeT);
        }
        break;
    
    default:
        
        break;
    
}
} while ($reponse < 6);


/***************** FONCTIONS *****************/
function creationEmploye()
{
    global $nomE, $ageE, $salaireE, $numSecuE, $gradeE; 
    echo "***** Création d'un employé *****\n";
    $nomE     = readline("Nom de l'employé.......: ");
    $ageE     = readline("Âge de l'employé.......: ");
    $salaireE = readline("Salaire de l'employé...: ");
    $numSecuE = strval(readline("N° Sécu de l'employé...: "));
    
}

function creationTechnicien()
{
    global $nomT, $ageT, $salaireT, $numSecuT, $gradeT; 
    echo "***** Création d'un technicien *****\n";
    $nomT     = readline("Nom du technicien.......: ");
    $ageT     = readline("Âge du technicien.......: ");
    $salaireT = readline("Salaire du technicien...: ");
    $numSecuT = strval(readline("N° Sécu du technicien...: "));
    $gradeT   = strtoupper(readline("Grade du technicien.....: "));
    
}

function menu()
{
    global $reponse;
    echo "\n*********** MENU ************\n";
    echo "Afficher info employé.....: 1\n";
    echo "Afficher info technicien..: 2\n";
    echo "Augmentation employé......: 3\n";
    echo "Augmentation technicien...: 4\n";
    echo "Création nouveau salarié..: 5\n";
    $reponse = readline("Réponse: ");
}