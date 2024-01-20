<?php

// Run this from the CLI

try {
    $pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant', 'vagrant');

    $stmt = $pdo->prepare(
        'INSERT INTO customers (firstname, lastname) VALUES (?, ?)'
    );
    
    $firstName = 'Bruce';
    
    $lastName = 'Osborne';

    $stmt->bindParam(1, $firstName);
    $stmt->bindParam(2, $lastName);

    $stmt->execute();
} catch (PDOException $e){
    var_dump($e->getMessage());
} finally {
    echo (PHP_EOL . 'DONE' . PHP_EOL);
}