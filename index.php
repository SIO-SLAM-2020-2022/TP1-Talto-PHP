<?php

include 'TStation.php';
include 'TTalto.php';
include 'TReservoir.php';

/**
 * Instanciation des reservoirs - nom, capacite (en L), volume qui reste (en L)
 */
$i = 0;
$reservoir_ = null;
do {
    $i++;
    do {
        print "Saisir le nom du carburant : ";
        $nomCarburant = trim(fgets(STDIN));
        print "Saisir la capacité du réservoir : ";
        $capaReservoir = trim(fgets(STDIN));
        print "Saisir le volume restant : ";
        $volRestant = trim(fgets(STDIN));
        ${$reservoir_ . $i} = new TReservoir($nomCarburant, $capaReservoir, $volRestant);
    } while (!${$reservoir_ . $i});

    print "Voulez-vous rajouter un objet ? : ";
    $reponse = trim(fgets(STDIN));

} while ($reponse == "oui");


$tab_reservoir_nord = [$reservoir_1, $reservoir_2, $reservoir_4, $reservoir_3];
$tab_reservoir_sud = [$reservoir_2, $reservoir_1, $reservoir_3];
$tab_reservoir_ouest = [$reservoir_1, $reservoir_2, $reservoir_3, $reservoir_4];
$tab_reservoir_est = [$reservoir_1, $reservoir_2];

$station_nord = new TStation('Station Nord', $tab_reservoir_nord, 4);

$station_sud = new TStation('Station Sud', $tab_reservoir_sud, 3);

$station_ouest = new TStation('Station Ouest', $tab_reservoir_ouest, 4);

$station_est = new TStation('Station Est', $tab_reservoir_est, 2);


$TTalto = new TTalto(
    array(
        $tab_reservoir_nord,
        $tab_reservoir_sud,
        $tab_reservoir_est,
        $tab_reservoir_ouest
    ),
    array(
        $station_nord,
        $station_est,
        $station_sud,
        $station_ouest
    )
);

/**
 * RÉPONSE QUESTION NUMERO 1
 */
# print $reservoir_1->getVolumeBesoin() . "\n";
# print "Volume restant dans le resevoir 1 après réapprovisionnement : " . $reservoir_1->getVolumeRestant() . "\n";

/**
 * REPONSE QUESTION NUMERO 2
 */
#$station_sud->getBesoin('SP-98');
#$station_nord->getBesoin('SP-95');

/**
 * REPONSE QUESTION NUMERO 3
 */
#$TTalto->livrer('SP-95', 1000);
print_r(${$reservoir_ . 1});
