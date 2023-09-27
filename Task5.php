<?php 
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special_chars = '!@#$%^&*()_+';

    $all_characters = $lowercase . $uppercase . $numbers . $special_chars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random_index = rand(0, strlen($all_characters) - 1);
        $password .= $all_characters[$random_index];
    }
    return $password;
}
$password = generatePassword(12);
echo $password;



?>