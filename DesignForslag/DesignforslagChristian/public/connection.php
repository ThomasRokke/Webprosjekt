<?php
    $port = '3306';
    $username = 'my_cms';
    $password = 'webprosjekt';
    $name = 'my_company';

    $connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);
?>