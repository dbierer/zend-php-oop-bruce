<?php
// Run this from the CLI
//
// Validate a single email address
// Permitted characters based on RFC2822
// https://regex101.comn looks like agood regex checker with explanaiton of the regex

function validateEmail($email)
{
    $pattern = '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9!#$%&\'*+\/=?^_`{|}~-]+\.[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+$/';



    $valid = preg_match($pattern, $email) ? 'VALID': "INVALID";
    
    // $valid = preg_match($pattern, $email);
    
    return $valid;

}

echo (validateEmail('Fred@example.edu') . PHP_EOL);
echo (validateEmail('Fred@exampleedu') . PHP_EOL);
