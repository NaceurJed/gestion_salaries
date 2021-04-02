<?php

require_once "Employe.php";

class Technicien extends Employe
{
    protected $grade;

    public function __construct($nomT, $ageT, $salaireT, $numSecuT, $gradeT)
    {
    parent::__construct($nomT, $ageT, $salaireT, $numSecuT, $gradeT);
    $this->grade = $gradeT;
    }

    public function getGrade(){
		return $this->grade;
	}
    public function setGrade($nouveauGrade){
		$this->grade = $nouveauGrade;
	}

    //Calcul de la prime en fonction du grade
	public function prime(){	
		switch ($this->grade) {
            case 'A':
                return $prime = 300;
                break;
            case 'B':
                return $prime = 200;
                break;
            case 'C':
                return $prime= 100;
                break;
            
            default:
                return $prime = 0;
                break;
        };
    }

    //Calcul du salaire en fonction de la prime
    public function calculeSalaire()
    {
        $prime = $this->prime();
        return $this->salaire += $prime;
    }

    //Affichage des info
    public function toString()
    {
        echo parent::afficher()."\nGrade....: ".$this->grade; //on lui précise qu'il doit utiliser la méthode "afficher" du parent pour ne pas créer de confusion si on avait cette méthode chez l'enfant
    }

}
