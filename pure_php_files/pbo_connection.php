<?php
    $host = 'localhost';
    $dbname = 'cbt';
    $username = 'Hassan';
    $password = 'hassan1234@@@';

    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     session_start();
?>