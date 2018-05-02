<?php
/**
 * Created by PhpStorm.
 * User: Projectteam 41
 * Date: 26-4-2018
 * Time: 15:22
 */

if (!isset($_SESSION)) {
    session_start();
}

ob_start();
require_once "includes/database.php";
include_once "includes/header.php";

$url = null;

if (ISSET($_GET['url']) && !is_null($_GET['url'])) {
    $url = $_GET['url'];
}

switch ($url) {
    case 'index':
        require_once 'home.php';
        break;
    case 'overzicht':
        require_once 'overzicht.php';
        break;
    case 'login':
        require_once 'login.php';
        break;
    case 'register':
        require_once 'regristeer.php';
        break;
    case 'logout':
        require_once 'logout.php';
        break;
    case 'detailpagina':
        require_once 'detailpagina.php';
        break;
    case 'persoondetail':
        require_once 'persoondetail.php';
        break;
    case 'overons':
        require_once 'overons.php';
        break;
    default:
        if (!isset($_GET['url'])) {
            require_once 'home.php';
        }
        require_once 'notfound.php';
        break;
}

include_once 'includes/footer.php';

?>