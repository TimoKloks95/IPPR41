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
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>

<body>
<header>
    <div class="container-header">
        <div class="d-flex justify-content-around">
            <div class="p-2">
                <img src="images/logo.png" class="img-fluid" id="logo-img" alt="logo">
            </div>
            <div class="p-2">
                <nav class="navbar">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Zoeken">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
                    </form>
                </nav>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-default">Login</button>
                <button type="button" class="btn btn-default">Registreer</button>
            </div>
        </div>
    </div>
    <nav>
        <div>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link active shadow p-3 mb-5 bg-light rounded" href="?url=index">Home</a></li>
                <li class="nav-item"><a class="nav-link shadow p-3 mb-5 bg-light rounded" href="?url=detailpagina">detailpagina</a></li>
                <li class="nav-item"><a class="nav-link shadow p-3 mb-5 bg-light rounded" href="?url=overzicht">Overzicht</a></li>
                <li class="nav-item"><a class="nav-link shadow p-3 mb-5 bg-light rounded" href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>
</header>


