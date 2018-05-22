<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:40
 */

if (isset($_POST['submit'])) {
    if (ISSET($_POST['username']) && !is_null($_POST['username']) &&
        ISSET($_POST['password']) && !is_null($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        login($username, $password);
    }
}
?>

<main>
    <div class="container">
        <div class="tile mx-auto">
            <div class="tile-header">
                <h2 id="tile-header-h2">
                    Login</h2>
            </div>

            <div class="tile-body">
                <form action="" method="POST" class="form login">

                    <label for="inputUsername">Gebruikersnaam</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">&#x1F464;</div>
                        </div>
                        <input type="text" class="form-control" id="inputUsername" placeholder=""
                               oninvalid="this.setCustomValidity('Vul uw gebruikersnaam in, aub')" required/>
                    </div>

                    <label for="inputWachtwoord">Wachtwoord</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">&#x1F512;</div>
                        </div>
                        <input type="password" class="form-control" id="inputWachtwoord" placeholder=""
                               oninvalid="this.setCustomValidity('Vul uw wachtwoord in, aub')" required/>
                    </div>

                    <div class="col-auto">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label" for="autoSizingCheck">
                                Onthoud mijn gegevens
                            </label>
                        </div>
                    </div>

                    <sub>Nog geen account?</sub>
                    <a href="?url=registreer">
                        <sub style="color: #87B04C">Creëer er een</sub>
                    </a>

                    <input type="submit" name="sumbit" class="btn btn-primary float-right m-4" value="Inloggen"/>
                </form>
            </div>
        </div>
    </div>
</main>

