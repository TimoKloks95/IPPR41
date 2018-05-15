<?php
/**
 * Created by PhpStorm.
 * User: Groep 41
 * Date: 24-4-2018
 * Time: 13:31
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="images/logo-klein.png"/>

    <title>Eenmaal Andermaal</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<header>
    <div class="container">
        <div class="d-flex justify-content-around">
            <div class="p-2">
                <a href="?url=index">
                    <picture>
                        <source media="(min-width: 780px)" srcset="images/logo.png" type="image/svg+xml">
                        <img src="images/logo-klein.png" alt="Logo" class="img-thumbnail">
                    </picture>
                </a>
            </div>
            <div class="p-2">
                <nav class="navbar">
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Zoeken">
                        <button class="btn" type="submit"><img class="loop" src="images/loop.png" alt="Loop"></button>
                    </form>
                </nav>
            </div>
            <div class="p-2">
                <a href="?url=login" type="button" class="btn btn-primary">Login</a>
                <a href="?url=registreer" type="button" class="btn btn-primary">Registreer</a>
            </div>
        </div>
    </div>
</header>
<nav>

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- icoontjes -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Zoeken">
                <button class="btn" type="submit"><img class="loop" src="images/loop.png" alt="Loop"></button>
            </form>
            <ul class="navbar-nav mx-auto flex-row flex-wrap">
                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'all') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=all">
                        <img src="images/logo-klein.png" class="menu-item-img" alt="Alle veiligen">
                        <h3 class="menu-item-h3">Alle</h3>
                    </a>
                </li>

                <li class="nav-item <?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Azie') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Azie">
                        <img src="images/icoontjes-EA_Asia.png" class="menu-item-img" alt="Aziatische veiligen">
                        <h3 class="menu-item-h3">Azië</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Boeken') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Boeken">
                        <img src="images/icoontjes-EA_Books.png" class="menu-item-img" alt="Boeken veiligen">
                        <h3 class="menu-item-h3">Boeken</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Cameras') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Cameras">
                        <img src="images/icoontjes-EA_Camera.png" class="menu-item-img" alt="Camera veiligen">
                        <h3 class="menu-item-h3">Camera's</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Computers') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Computers">
                        <img src="images/icoontjes-EA_Computer.png" class="menu-item-img" alt="Computer veiligen">
                        <h3 class="menu-item-h3">Computers</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Historie') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Historie">
                        <img src="images/icoontjes-EA_History.png" class="menu-item-img" alt="Historie veiligen">
                        <h3 class="menu-item-h3">Historie</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Sieraden') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Sieraden">
                        <img src="images/icoontjes-EA_Jewelry.png" class="menu-item-img" alt="Sieraden veiligen">
                        <h3 class="menu-item-h3">Sieraden</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Motoren') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Motoren">
                        <img src="images/icoontjes-EA_Motor.png" class="menu-item-img" alt="Motoren veiligen">
                        <h3 class="menu-item-h3">Motoren</h3>
                    </a>
                </li>

                <li class="nav-item<?php if (isset($_GET['url']) && isset($_GET['cat'])) {
                    if ($_GET['cat'] == 'Muziek') { ?> current-item <?php } else { ?> noncurrent-item <?php }
                } ?>">
                    <a class="nav-link" href="?url=overzicht&cat=Muziek">
                        <img src="images/icoontjes-EA_Music.png" class="menu-item-img" alt="Muziek veiligen">
                        <h3 class="menu-item-h3">Muziek</h3>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</nav>
</body>
