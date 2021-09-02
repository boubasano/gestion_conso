<?php


namespace App\Services;



use App\Entity\SuiviConso;
use App\Entity\Vehicule;

class CalculAutonomie
{
//    private $suiviConso;
//    private $vehicule;
//
//    public function __construct(SuiviConso $suiviConso, Vehicule $vehicule)
//    {
//        $this->suiviConso = $suiviConso;
//        $this->vehicule = $vehicule;
//    }

    public function calculAutonomieEnKm($nombreLitres, $consommationMixte)
    {
        $autonomie = "";
        $suiviConso = new SuiviConso();
        if ($consommationMixte != 0)
        {
            $autonomie = ($nombreLitres*100)/$consommationMixte;

        } else
//            echo "Vous devez faire cette opération avant ";
            echo $suiviConso->getNombreLitre();


        return $autonomie;
    }

}
