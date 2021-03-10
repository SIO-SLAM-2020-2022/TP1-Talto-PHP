<?php

class TTalto {

    private Array $mesReservoirs;
    private Array $mesStations;


    public function __construct(Array $mesReservoirs, Array $mesStations) {
        if (count($mesReservoirs) <= 4) {
            $this->mesReservoirs = $mesReservoirs;
            $this->mesStations = $mesStations;
        }
    }

    public function livrer(String $Nom_Carburant, Int $Volume_Carburant) {

        $i = 0;
        while (($i < count($this->mesReservoirs)) && ($this->mesReservoirs[$i]->getCarburant() != $Nom_Carburant) ){
            $i++;
        }
        if ($i < count($this->mesReservoirs)){
            $this->mesReservoirs[$i]->changerVolume(- $Volume_Carburant);
        } else {
            print "Carburant non trouvé/non existant !";
        }

        /*
        foreach ($this->mesReservoirs as $key) {
            foreach ($key as $k => $value) {
                if ($value->getCarburant() == $Nom_Carburant) {
                    print "Réservoir Numéro : " . ($k + 1) . "\n";
                    print "Nom : " . $value->getCarburant() . "\n";
                    print "Capacité du réservoir : " . $value->getCapacite() . "\n";
                    print "Volume restant avant : " . $value->getVolumeRestant() . "\n";
                    $after = $value->getVolumeRestant() + $Volume_Carburant;
                    print "Volume restant après : " . $after . "\n";
                    print "---------------- \n";

                }
            }
        }*/
    }

    public function reste(String $Nom_Carburant): Int{

        $i = 0;
        while (($i < count($this->mesReservoirs)) && ($this->mesReservoirs[$i]->getCarburant() != $Nom_Carburant) ){
            $i++;
        }
        if ($i < count($this->mesReservoirs)){
            return $this->mesReservoirs[$i]->getVolumeRestant();
        } else {
            print "Carburant non trouvé";
            return 0;
        }


    }


    public function getNbStation(): Int { return count($this->mesStations); }
    public function getStations(Int $Num_Station): TStation { return $this->mesStations[$Num_Station]; }
}