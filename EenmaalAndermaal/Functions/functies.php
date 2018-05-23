<?php
/**
 * Created by PhpStorm.
 * User: lowie
 * Date: 8-5-2018
 * Time: 11:39
 */
function getOverzicht()
{
    $getOverzicht = 'SELECT V.Titel, V.Beschrijving, VA.Afbeelding
      FROM Voorwerp V inner join Voorwerp_afbeelding VA on V.Voorwerpnummer = VA.Voorwerpnummer';
    $dbh = getDatabaseConnection();
    $stmt = $dbh->prepare($getOverzicht);
    $stmt->execute();
    $contractResult = $stmt->fetchAll();
    closeDatabaseConnection($dbh);
    return $getOverzicht;
}

function getRubriekIcoon()
{
    $getRubriekIcoon = 'SELECT R.Rubrieknaam, RA.Afbeelding
      FROM Rubriek R inner join Rubriek_afbeelding RA on R.Rubrieknummer = RA.Rubrieknummer';
    $dbh = getDatabaseConnection();
    $stmt = $dbh->prepare($getRubriekIcoon);
    $stmt->execute();
    closeDatabaseConnection($dbh);
    return $getRubriekIcoon;
}

function getDetails()
{

}

function registerUser($fname, $lname, $gender, $street, $housenumber, $street2, $housenumber2, $city, $zipcode, $country, $email, $phone, $bday, $verificationcode, $username, $password, $question, $answer)
{
    $query = 'INSERT INTO Gebruiker(gebruiksnaam, voornaam, achternaam, adresregel1,adresregel2, postcode,landnaam, geboortedatum) 
values (:username, :fname, :lname, :street + :housenumber, :street2 + :housenumber2, :zipcode:,:country, :bday)';
    $dbh = getDatabaseConnection();
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':housenumber', $housenumber);
    $stmt->bindParam(':street2', $street2);
    $stmt->bindParam(':housenumber2', $housenumber2);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':zipcode', $zipcode);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':bday', $bday);
    $stmt->bindParam(':verificationcode', $verificationcode);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':question', $question);
    $stmt->bindParam(':answer', $answer);

//    $stmt->bindParam(':bank', $bank);
//    $stmt->bindParam(':cardnummer', $cardnumber);

    $stmt->execute();
    closeDatabaseConnection($dbh);
}

function login($username, $password)
{
    $dbh = getDatabaseConnection();
    $query = '';
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetchAll();
    closeDatabaseConnection($dbh);

    if ($result != null) {
        foreach ($result as $user) {
            if (password_verify(
                $password, $user['password'])) {
                $_SESSION['username'] = $user['user_name'];
                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                ob_clean();
                header('location:?url=index');
            } else {
                $errorMessage = 'Password unknown!';
                ?>
                <div class="loginfailed">
                    <p><?= $errorMessage ?></p>
                </div>
                <?php
            }
        }
    } else {
        $errorMessage = 'Username unknown!';
        ?>
        <div class="loginfailed">
            <p><?= $errorMessage ?></p>
        </div>
        <?php
    }
}

?>