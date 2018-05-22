<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:41
 */

$_SESSION['username'] = null;
session_unset();
session_destroy();
ob_clean();
header('location:?url=index');

?>