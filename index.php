<?php

$user = 'root';
$pass = 'secret';

try {
    $dbh = new PDO('mysql:host=mysql;port=3306;dbname=test', $user, $pass);
    
    foreach($dbh->query('SELECT * from test') as $row) {
        print_r($row);
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}