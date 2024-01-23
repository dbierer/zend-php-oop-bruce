<?php

// Run this from the CLI

try {
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant', 'vagrant', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $pdo->beginTransaction();

    $pdo->exec('insert into customers (firstname, lastname) values ("Fred", "Flintstone")');
    $pdo->exec('insert into customers (firstname, lastname) values ("Barney", "Rubble")');

    $pdo->commit();
} catch (PDOException $e) {
    $pdo->rollBack();
    echo($e->getMessage());
}