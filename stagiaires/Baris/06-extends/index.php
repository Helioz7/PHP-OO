<?php
// chargement du parent
require_once "PersoBase.php";
// chargement d'un enfant 
require_once "PersoMagicien.php";

$persoBase = new PersoBase ("Mike",47,"nain");
$persoMagicien = new PersoMagicien ("lee",22,"cyborg");