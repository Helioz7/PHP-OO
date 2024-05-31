<?php 

class PersoMagicien extends PersoBase{
    // Propriétés 
    protected string $magieType;
    protected int $magiePoint = 100;

    // Propriétés écrasées (public ou protégées)
    protected int $xp=25;

    //On ne peut pas l'écraser une propriété privée du parent !
    //pulic int bool null $alive = 5;

    // methodes 

    // surcharge du constrcuteur

    public function __construct(string $name, $int, $age, string $espece, string $magieType="Blanche"){
        parent::__construct($name,$age,$espece);
        // on ajoute ce qu'e l'on souhaite au constructeur enfant
        $this->magieType =$magieType;
        
    }
}