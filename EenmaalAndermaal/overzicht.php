<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:40
 */

?>

<div class="container bg-light">
    <?php if (isset($_GET['cat'])) {
        echo $_GET['cat'];
    } ?>
    <main>
        <?php
        $dbh = getDatabaseConnection();
        $categorie = $_GET['cat'];
        $returnQuery = ("SELECT V.titel as titel, V.startprijs as startprijs, V.looptijdbeginDag as begindag, V.looptijdbeginTijdstip as begintijd
      ,V.beschrijving as beschrijving, VA.afbeelding as afbeelding
      FROM Voorwerp V inner join Voorwerp_afbeelding VA on V.Voorwerpnummer = VA.Voorwerpnummer 
      inner join Voorwerp_In_Rubriek VIR on V.Voorwerpnummer = VIR.Voorwerp inner join Rubriek R on
      R.Rubrieknummer = VIR.Rubriek_Op_Laagste_Niveau
      WHERE R.Rubrieknaam = :categorie");
        $statement = $dbh->prepare($returnQuery);
        $statement->execute(
            array(
                ':categorie' => $categorie
            )
        );
        if (($statement->rowCount()) === 0) {
            header('Location: ?url=notfound');
        } else {
            while ($row = $statement->fetch()) {
                $startprijs = $row['startprijs'];
                $begindag = $row['begindag'];
                $begintijd = $row['begintijd'];
                $titel = $row['titel'];
                $beschrijving = $row['beschrijving'];
                $afbeelding = $row['afbeelding'];

                echo '
            <a href="?url=detailpagina">
            <div class="card">
                <img class="card-img-top" src="' . $afbeelding . '" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title carousel-caption">' . $titel . '</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Startprijs: $' . $startprijs . '</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Startdatum: ' . $begindag . " " . $begintijd . '</h6>
                    <p class="card-text">' . $beschrijving . '
                        <br>
                        <br>
                    </p>
                </div>
                    <button type="button" class="btn btn-primary">Meer info</button>
                </div>
            </div>
        </a>
            ';
            }
        }
        ?>
    </main>
</div>

