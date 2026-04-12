<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;

try {
    $client = new Client("mongodb://localhost:27017");
    $db = $client->i_mongoDB;
    $usersCollection = $db->users;
} catch (Exception $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>