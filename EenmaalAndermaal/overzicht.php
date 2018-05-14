<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:40
 */

?>

<div class="container bg-light">
    <?php echo $_GET['cat']; ?>
    <main>
        <?php
        $categorie = $_GET['cat'];
        $dbh = getDatabaseConnection();
        if($categorie == 'all') {
            $returnQuery = $dbh->query("SELECT V.Titel as Titel, V.Startprijs as startprijs, V.LooptijdbeginDag as begindag, V.LooptijdbeginTijdstip as begintijd
      ,V.Beschrijving as Beschrijving, VA.Afbeelding as Afbeelding
      FROM Voorwerp V inner join Voorwer
      ,V.Beschrijving as Beschrijving, VA.Afbeelding as Afbeelding
      FROM Voorwerp V inner join Voorwerp_afbeelding VA on V.Voorwerpnummer = VA.Voorwp_afbeelding VA on V.Voorwerpnummer = VA.Voorwerpnummer 
      inner join Voorwerp_In_Rubriek VIR on V.Voorwerpnummer = VIR.Voorwerp inner join Rubriek R on
      R.Rubrieknummer = VIR.Rubriek_Op_Laagste_Niveau\");
        }
        else {
            $returnQuery = $dbh->query(\"SELECT V.Titel as Titel, V.Startprijs as startprijs, V.LooptijdbeginDag as begindag, V.LooptijdbeginTijdstip as begintijderpnummer 
      inner join Voorwerp_In_Rubriek VIR on V.Voorwerpnummer = VIR.Voorwerp inner join Rubriek R on
      R.Rubrieknummer = VIR.Rubriek_Op_Laagste_Niveau
      WHERE R.Rubrieknaam = '$categorie'");
        }


        while($row = $returnQuery -> fetch()) {
            $startprijs = $row['startprijs'];
            $begindag = $row['begindag'];
            $begintijd = $row['begintijd'];
            $titel = $row['Titel'];
            $beschrijving = $row['Beschrijving'];
            $afbeelding = $row['Afbeelding'];

            echo '
            <a href="?url=detailpagina">
            <div class="card">
                <img class="card-img-top" src="'.$afbeelding.'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title carousel-caption">'.$titel.'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Startprijs: $'.$startprijs.'</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Startdatum: '.$begindag." ".$begintijd.'</h6>
                    <p class="card-text">'.$beschrijving.'
                        <br>
                        <br>
                    </p>
                    <a href="?url=detailpagina" class="btn btn-primary">Meer info</a>
                </div>
            </div>
        </a>
            ';
        }
        ?>
    </main>
</div>

