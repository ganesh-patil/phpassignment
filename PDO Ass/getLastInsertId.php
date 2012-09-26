<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=test", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();

    /*** CREATE table statements ***/
   /* $table = "CREATE TABLE forgetid ( g_id MEDIUMINT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    g_type VARCHAR(25) NOT NULL,
    g_name VARCHAR(25) NOT NULL 
    )";
    $dbh->exec($table); */
    /*** INSERT a new row ***/
    $dbh->exec("INSERT INTO forgetid(g_type, g_name) VALUES ('get', 'g1')");

    /*** display the id of the last INSERT ***/

     echo "<br/><br/> Last Insert id::  ";
    echo $dbh->lastInsertId();

    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
