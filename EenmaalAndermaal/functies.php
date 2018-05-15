<?php
/**
 * Created by PhpStorm.
 * User: lowie
 * Date: 8-5-2018
 * Time: 11:39
 */
function getOverzicht() {
    $getOverzicht = 'SELECT V.Voorwerpnummer, V.Titel, V.Beschrijving, VA.Afbeelding
FROM Voorwerp V inner join Voorwerp_afbeelding VA on V.Voorwerpnummer = VA.Voorwerpnummer';
    $dbh = getDatabaseConnection();
    $stmt = $dbh->prepare($getOverzicht);
    $stmt->execute();
    $contractResult = $stmt->fetchAll();
    closeDatabaseConnection($dbh);
    return $getOverzicht;
}

function getRubriekIcoon() {
    $getRubriekIcoon = 'SELECT R.Rubrieknaam, RA.Afbeelding
FROM Rubriek R inner join Rubriek_afbeelding RA on R.Rubrieknummer = RA.Rubrieknummer';
    $dbh = getDatabaseConnection();
    $stmt = $dbh->prepare($getRubriekIcoon);
    $stmt->execute();
    closeDatabaseConnection($dbh);
    return $getRubriekIcoon;
}

