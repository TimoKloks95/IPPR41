<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 7-5-2018
 * Time: 10:01
 */
?>

<main>
    <div class="container">
        <h1 class="text-center text-inverse">Registratie formulier</h1>
        <hr>
        <form>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                     aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
            <fieldset>
                <h4 class="text-left text-inverse">Persoonsgegevens</h4>
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputVoornaam">Voornaam</label>
                        <input type="text" class="form-control" id="inputVoornaam" placeholder="Henk" required
                               oninvalid="this.setCustomValidity('Vul uw voornaam in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAchternaam">Achternaam</label>
                        <input type="text" class="form-control" id="inputAchternaam" placeholder="Janssen" required
                               oninvalid="this.setCustomValidity('Vul uw achternaam, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Straat</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Hoofdstraat" required
                               oninvalid="this.setCustomValidity('Vul uw straatnaam in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputHuisnummer">Huisnummer</label>
                        <input type="number" class="form-control" id="inputHuisnummer" placeholder="45" required
                               oninvalid="this.setCustomValidity('Vul uw huisnummer in, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Straat 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Kerkstraat"
                               oninvalid="this.setCustomValidity('Vul uw straat in, aub')">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputHuisnummer2">Huisnummer 2</label>
                        <input type="text" class="form-control" id="inputHuisnummer2" placeholder="19"
                               oninvalid="this.setCustomValidity('Vul uw huisnummer in, aub')">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Woonplaats</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Amsterdam" required
                               oninvalid="this.setCustomValidity('Vul uw woonplaats in, aub')">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">Postcode</label>
                        <input type="text" class="form-control" id="inputZip" placeholder="1234AB" required
                               oninvalid="this.setCustomValidity('Vul uw postcode in, aub')">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Land</label>
                        <select id="inputState" class="form-control" required
                                oninvalid="this.setCustomValidity('Selecteer uw land, aub')">
                            <option selected>Choose...</option>
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
                        <input type="email" class="form-control" id="inputEmail4" placeholder="henk-janssen@mail.com"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputMobile">Telefoonnummer</label>
                        <input type="tel" class="form-control" id="inputMobile" placeholder="0612345678" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputBDay">Geboortedatum</label>
                        <input type="date" class="form-control" id="inputBDay" placeholder="01-01-1970" required>
                    </div>
                </div>
                <input type="button" name="next" class="btn btn-primary next" value="Next"/>
            </fieldset>

            <fieldset>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%"></div>
                </div>
                <h4 class="text-left text-inverse">Accountgegevens</h4>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputVerificatie">Verificatiecode</label>
                        <input type="text" class="form-control" id="inputVerificatie" placeholder="12345678" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputUsername">Gebruikersnaam</label>
                        <input type="text" class="form-control" id="inputUsername" placeholder="HenkJanssen" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPassword">Wachtwoord</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Wachtwoord"
                               required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword2">Wachtwoord bevestigen</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Wachtwoord"
                               required>
                    </div>
                </div>
                <input type="button" name="next" class="btn btn-primary next" value="Next"/>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <input type="button" name="next" class="btn btn-primary next" value="Next"/>
            </fieldset>
        </form>
    </div>
</main>
