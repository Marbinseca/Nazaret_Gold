<?php

require_once 'C:/xampp/htdocs/Nazaret_Gold/vendor/autoload.php';

$url = "mongodb://localhost:27017";

$client = new MongoDB\Client($url);
$database = $client -> selectDatabase('nazaret_gold');
$collection = $database -> selectCollection('users');
            




