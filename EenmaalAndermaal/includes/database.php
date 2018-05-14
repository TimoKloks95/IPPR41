<?php
/**
 * Created by PhpStorm.
 * User: Ilona
 * Date: 26/04/2018
 * Time: 15:39
 */
function getDatabaseConnection()
{
    $hostname = 'localhost';
    $dbname = 'EenmaalAndermaal';
    $username = 'sa';
    $password = 'lekkerkort';

    try {
        $dbh = new PDO('sqlsrv:Server=' . $hostname . ';Database=' . $dbname . ';ConnectionPooling=0', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        die ('Error connection to database: ' . $e->getMessage());
    }
}

// Database handle is passed by reference to close a database connection.
function closeDatabaseConnection(&$dbh)
{
    // Close the database handle
    $dbh = null;
}

?>