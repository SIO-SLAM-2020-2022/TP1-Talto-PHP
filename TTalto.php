<?php


class TTalto {

    private Array $mesReservoirs;
    private Array $mesStations;


    public function __construct(Array $mesReservoirs, Array $mesStations) {
        $this->mesReservoirs = $mesReservoirs;
        $this->mesStations = $mesStations;
    }

    public function getNbStation(): Int {
        return count($this->mesStations) - 1;
    }

    public function getStations(Int $Num_Station): TStation {
        return $this->mesStations[$Num_Station];
    }

    public function livrer(String $Nom_Carburant, Int $Volume_Carburant): void {

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
        }
    }

    public function reste(String $Nom_Carburant) {
        return $this->mesReservoirs[$Nom_Carburant];
    }
}