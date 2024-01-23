<?php

// Run this from the CLI

$pdo = new PDO('mysql:host=localhost;dbname=phpcourse','vagrant', 'vagrant');


$pdo->exec('DROP PROCEDURE IF EXISTS phpcourse.newCustomer');


$pdo->exec(
    'CREATE PROCEDURE phpcourse.newCustomer(
        p_firstname varchar(32),
        p_lastname varchar(32)
        )
    BEGIN
        insert into customers (firstname, lastname) values (p_firstname, p_lastname);
    END'
);




try {
    $firstName = 'Doug';  
    $lastName = 'Bierer';

    $stmt = $pdo->prepare('CALL newCustomer(?,?)');

    if($stmt->execute([$firstName, $lastName])) {
        echo "New user $firstName $lastName added";
    }

} catch (PDOException $e){
    var_dump($e->getMessage());
} finally {
    echo (PHP_EOL . 'DONE' . PHP_EOL);
}