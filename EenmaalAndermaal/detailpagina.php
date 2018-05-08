<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:40
 */
?>
        <div class="container">
            <div class="d-flex flex-sm-nowrap">
                <div class="container-detail">
                    <h2>---Titel Product---</h2>
                    <div class="carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/klopt.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/ing_011.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Beschrijving</h5>
                            <p class="card-text">---product beschrijving---</p>
                        </div>
                    </div>
                        <a class="btn btn-primary" data-toggle="collapse" href="#productinfo" role="button" aria-expanded="false">Product</a>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#verkoperinfo" aria-expanded="false">Verkoper</button>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="productinfo">
                                <div class="card card-body">
                                    <p>Titel voorwerp: </p>
                                    <p>Rubriek: </p>
                                    <p>Startprijs: </p>
                                    <p>Betalingswijze: </p>
                                    <p>Betalingsinstructies: </p>
                                    <p>Looptijd: </p>
                                    <p>Verzendkosten: </p>
                                    <p>Verzendinstructies: </p>
                                    <p>Voorwerpnummer: </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse" id="verkoperinfo">
                                <div class="card card-body">
                                    <p>Verkoper: </p>
                                    <p>Locatie: </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-detailbieden">

                        <h4>00:00</h4>
                        <button type="button" class="btn btn-primary btn-block">Log in en bied mee!</button>
                        <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Gebruiker</th>
                                        <th scope="col">Bod</th>
                                        <th scope="col">Datum</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Markie4</td>
                                        <td>$12</td>
                                        <td>04-05-2018 10:46:07</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob5</td>
                                        <td>$8</td>
                                        <td>03-05-2018 11:11:56</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry4</td>
                                <td>$6</td>
                                <td>03-05-2018 10:12:39</td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-primary" id="meerbiedingenknop" data-toggle="collapse" href="#meerbieders" role="button" aria-expanded="false">Meer biedingen</a>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="meerbieders">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Gebruiker</th>
                                            <th scope="col">Bod</th>
                                            <th scope="col">Datum</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Markie4</td>
                                            <td>$12</td>
                                            <td>04-05-2018 10:46:07</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Jacob5</td>
                                            <td>$8</td>
                                            <td>03-05-2018 11:11:56</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Larry4</td>
                                            <td>$6</td>
                                            <td>03-05-2018 10:12:39</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Groep 41
 * Date: 24-4-2018
 * Time: 10:01
 */