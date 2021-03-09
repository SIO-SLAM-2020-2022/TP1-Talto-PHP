<?php


class TStation {

    private String $nom_station;
    private Array $tableau_reservoir;
    private Int $nb_reservoir;

    public function __construct(String $Nom_Station, Array $Tableau_Reservoir, Int $Nombre_Reservoir) {
        $this->nom_station = $Nom_Station;
        $this->tableau_reservoir = $Tableau_Reservoir;
        $this->nb_reservoir = $Nombre_Reservoir;

    }


    public function getBesoin(String $Nom_Carburant): void{

        foreach ($this->tableau_reservoir as $key => $val) {
            if ($val->getCarburant() == $Nom_Carburant){
                print "Nom : " . $val->getCarburant() . "\n";
                print "Capacité du réservoir : " . $val->getCapacite() . "\n";
                print "Volume restant : " . $val->getVolumeRestant() . "\n";
            }
        }
    }

    public function getNomStation(): String {
        return $this->nom_station;
    }
}