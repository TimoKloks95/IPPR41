<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 7-5-2018
 * Time: 10:01
 */


if (isset($_POST['submit'])) {
    $maxLengthUserName = 30;
    $password = null;
    if ((!is_null($_POST['password']) && $_POST['password'] == $_POST['password2']) || strlen($_POST['username']) > $maxLengthUserName) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        registerUser($_POST['email'], $_POST['lastname'], $_POST['firstname'], $_POST['paymentMethod'], $_POST['bankaccount'], $_POST['subscription'], $_POST['username'], $password, $_POST['country'], $_POST['gender'], $_POST['birthdate']);
        ob_clean();
        header('location:?url=index');
    } else {
        $errorMessage = 'Failed to register.';
        ?>
        <div class="error">
            <p><?= $errorMessage ?></p>
        </div>
        <?php
    }
}

?>

<main>
    <div class="container">
        <h1 class="text-center text-inverse">Registratie formulier</h1>
        <hr>
        <form>
            <!--            Persoonsgegevens-->
            <fieldset>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%"></div>
                </div>
                <h4 class="text-left text-inverse">Persoonsgegevens</h4>
                <hr>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="inputVoornaam">Voornaam</label>
                        <input type="text" class="form-control" id="inputVoornaam" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw voornaam in, aub')">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputAchternaam">Achternaam</label>
                        <input type="text" class="form-control" id="inputAchternaam" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw achternaam, aub')">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputSex">Sekse</label>
                        <select id="inputSex" class="form-control" required
                                oninvalid="this.setCustomValidity('Selecteer uw sekse, aub')">
                            <option selected>Kies...</option>
                            <option>Vrouw</option>
                            <option>Man</option>
                            <option>Anders</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Straat</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw straatnaam in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputHuisnummer">Huisnummer</label>
                        <input type="number" class="form-control" id="inputHuisnummer" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw huisnummer in, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">*Straat 2*</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder=""
                               oninvalid="this.setCustomValidity('Vul uw straat in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputHuisnummer2">*Huisnummer 2*</label>
                        <input type="text" class="form-control" id="inputHuisnummer2" placeholder=""
                               oninvalid="this.setCustomValidity('Vul uw huisnummer in, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Woonplaats</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw woonplaats in, aub')">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Postcode</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw postcode in, aub')">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Land</label>
                        <select id="inputState" class="form-control" required
                                oninvalid="this.setCustomValidity('Selecteer uw land, aub')">
                            <option selected>Kies...</option>
                            <option>Nederland</option>
                            <option>Duitsland</option>
                            <option>België</option>
                            <option>Frankrijk</option>
                            <option>Spanje</option>
                            <option>Portugal</option>
                            <option>Polen</option>
                            <option>Oostenrijk</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder=""
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputMobile">Telefoonnummer</label>
                        <input type="tel" class="form-control" id="inputMobile" placeholder="" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputBDay">Geboortedatum</label>
                        <input type="date" class="form-control" id="inputBDay" placeholder="" required>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="6LeD11kUAAAAALo1gAFNdURzm7vYRGilQ5m0sKtI"></div>
                <input type="button" name="next" class="btn btn-primary next" value="Volgende"/>
            </fieldset>
            <!--            Accountgegevens-->
            <fieldset>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%"></div>
                </div>
                <h4 class="text-left text-inverse">Accountgegevens</h4>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputVerificatie">Verificatiecode</label>
                        <input type="text" class="form-control" id="inputVerificatie" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw code in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputUsername">Gebruikersnaam</label>
                        <input type="text" class="form-control" id="inputUsername" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw gebruikersnaam in, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Wachtwoord</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder=""
                               required oninvalid="this.setCustomValidity('Vul uw wachtwoord in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword2">Wachtwoord bevestigen</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder=""
                               required oninvalid="this.setCustomValidity('Herhaal uw voornaam, aub')">
                    </div>
                    <p id="passwordHelpBlock" class="form-text text-muted">
                        Het wachtwoord moet tussen de 7-20 tekens bevatten. Waaronder hoofdletters en cijfers. Het
                        is niet toegestaan om spaties, speciale karakters of emoji's te gebruiken.
                    </p>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputQuestion">Geheime vraag</label>
                        <select id="inputQuestion" class="form-control" required
                                oninvalid="this.setCustomValidity('Selecteer uw vraag, aub')">
                            <option selected>Kies...</option>
                            <option>In welke straat ben je geboren?</option>
                            <option>Wat is de meisjesnaam je moeder?</option>
                            <option>Wat is je lievelingsgerecht?</option>
                            <option>Hoe heet je oudste zusje?</option>
                            <option>Hoe heet je huisdier?</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputAnswer">Antwoord op vraag</label>
                        <input type="text" class="form-control" id="inputAnswer" placeholder="" required
                               oninvalid="this.setCustomValidity('Vul uw antwoord op de vraag in, aub')">
                    </div>
                </div>
                <input type="button" name="next" class="btn btn-primary next" value="Volgende"/>
            </fieldset>
            <!--            Betaalgegevens-->
            <fieldset>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%"></div>
                </div>
                <h4 class="text-left text-inverse">Betaalgegevens</h4>
                <hr>
                <div class="form-group">
                    <div class="form-group col-md-3">
                        <label for="inputBank">Bank</label>
                        <select id="inputQuestion" class="form-control" required
                                oninvalid="this.setCustomValidity('Selecteer uw bank, aub')">
                            <option selected>Kies...</option>
                            <option>Rabobank</option>
                            <option>ING</option>
                            <option>Knab</option>
                            <option>ASN Bank</option>
                            <option>NIBC Bank</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputBanknum">Bankrekeningnummer</label>
                        <input type="password" class="form-control" id="inputBanknum" placeholder=""
                               required oninvalid="this.setCustomValidity('Voer uw rekeningnummer in, aub')">
                    </div>
                </div>
                <input type="button" name="previous" class="btn btn-primary previous" value="Terug"/>
                <input type="submit" name="sumbit" class="btn btn-primary next" value="Verzend"/>
            </fieldset>
        </form>
    </div>
</main>
