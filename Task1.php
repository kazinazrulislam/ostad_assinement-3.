<?php
function modifyText($Stext) {
    $modifiedText = strtolower(str_replace("brown", "red", $Stext));
    echo $modifiedText;
}

$Stext = "The quick brown fox jumps over the lazy dog.";
modifyText($Stext);
?>
