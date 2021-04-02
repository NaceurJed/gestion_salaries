<?php

class Employe
{
    protected $nom;
	protected $age;
	protected $salaire;
	protected $numSecu;
	protected $grade;
    

    public function __construct($nomE, $ageE, $salaireE, $numSecuE, $gradeE)
    {
        $this->nom = $nomE;
        $this->age = $ageE;
        $this->salaire = $salaireE;
        $this->numSecu = $numSecuE;
        $this->grade = $gradeE;


    }

    /**** SETTER/GETTER ****/
    public function getNom(){
		return $this->nom;
	}
    public function setNom($nouveauNom){	
		$this->nom = $nouveauNom; 
	}

    public function getAge(){
		return $this->age;
	}
    public function setAge($nouvelAge){	
		$this->age = $nouvelAge; 
	}

    public function getSalaire(){
		return $this->salaire;
	}
	public function setsalaire($nouveauSalaire){	
		$this->salaire = $nouveauSalaire; 
	}

    public function getNumSecu(){
		return $this->numSecu;
	}
    public function setNumSecu($nouveauNumSecu){	
		$this->numSecu = $nouveauNumSecu; 
	}

    public function getGrade(){
		return $this->grade;
	}
    

    /**** METHODES ****/ 
    public function augmentation($augmentationEnEuro)
    {
        $this->salaire += $augmentationEnEuro;
        $this->calculeSalaire();
    }

    public function toString()
    {
        echo $this->afficher();
    }

    public function afficher()
    {
        return  "Nom......: ".ucfirst($this->nom)."\n".
                "Âge......: ".$this->age." ans\n".
                "Salaire..: ".$this->salaire." €\n".
                "N° secu..: ".$this->numSecu;
    }

    private function calculeSalaire()
    {
        return $this->salaire ;
    }

}



