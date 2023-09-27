<?php

function modifyText($text) {
    $lowerText = strtolower($text);

    $modifiedText = str_replace("brown", "red", $lowerText);

    echo $modifiedText;
}

$text = "The quick brown fox jumps over the lazy dog.";
modifyText($text);


?>