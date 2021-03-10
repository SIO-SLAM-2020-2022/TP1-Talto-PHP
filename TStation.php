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

    public function getBesoin(String $Nom_Carburant): Int{
        $i = 0;
        while (($i < count($this->tableau_reservoir)) && ($this->tableau_reservoir[$i]->getCarburant() != $Nom_Carburant)){
            $i++;
        }
        if ($i < count($this->tableau_reservoir)){
            return $this->tableau_reservoir[$i]->getVolumeBesoin();
        } else {
            return 0;
        }
        /*
        foreach ($this->tableau_reservoir as $key => $val) {
            if ($val->getCarburant() == $Nom_Carburant){
                print "Nom : " . $val->getCarburant() . "\n";
                print "Capacité du réservoir : " . $val->getCapacite() . "\n";
                print "Volume restant : " . $val->getVolumeRestant() . "\n";
                return $val->getCapacite() - $val->getVolumeRestant();
            } else {
                print "Le carburant : " . $Nom_Carburant . " n'existe pas !";
                return 0;
            }
        }*/
    }

    /*
     * Getters
     */
    public function getNomStation(): String { return $this->nom_station; }
    public function getNbReservoir(): Int { return $this->nb_reservoir; }
    public function getTableauReservoir(): Array { return $this->tableau_reservoir; }
}