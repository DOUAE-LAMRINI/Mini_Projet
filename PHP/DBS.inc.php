<?php

$dsn = 'mysql:host=localhost;dbname=contact_form';
$dbuser = 'root';
$dbpass = '1312acab1312';
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed :" . $e->getMessage());
}
