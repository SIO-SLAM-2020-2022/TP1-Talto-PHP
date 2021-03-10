<?php


class TReservoir {

    /**
     * @var String $carburant - nom du carburant
     * @var Int $capacite - capacite de stockage du carburant
     * @var Int $volume_restant - le volume de carburant restant
     */
    private String $carburant;
    private Int $capacite;
    private Int $volume_restant;


    public function __construct(String $Nom_Carburant, Int $Capacite_Reservoir, Int $Volume_Restant) {
        $Liste_Nom_Carburant = [
            "SP-95", "SP-98", "SUPER", "Gazole"
        ];
        if (in_array($Nom_Carburant, $Liste_Nom_Carburant) && $Volume_Restant > 0 && $Volume_Restant < $Capacite_Reservoir) {
            $this->carburant = $Nom_Carburant;
            $this->capacite = $Capacite_Reservoir;
            $this->volume_restant = $Volume_Restant;
        }
    }

    public function getVolumeBesoin(): Int{
        print 'Le volume restant dans le reservoir est : ' . $this->getVolumeRestant();
        if ($this->getVolumeRestant() < ($this->capacite * 0.20)){
            // $this->changerVolume($this->capacite - $this->getVolumeRestant());
            return $this->capacite - $this->getVolumeRestant();
        } else {
            print "\nPas besoin de réapprovisionner !";
            return 0;
        }
    }


    public function changerVolume(Int $volume){
        if ($this->volume_restant += $volume >= 0 && $this->volume_restant += $volume <= $this->capacite){
            $this->volume_restant += $volume;
        } else {
            print "Volume : " . $volume . " :: supérieur ou inférieure par rapport à la capacité : " . $this->capacite;
        }
    }

    /**
     * Getters
     */
    public function getCarburant(): String { return $this->carburant; }
    public function getVolumeRestant(): Int { return $this->volume_restant; }
    public function getCapacite(): Int { return $this->capacite; }
}