<?php
$grades =[85, 92, 78, 88, 95];
function Grade($grades) {
    rsort($grades);
    print_r($grades);
}
Grade($grades);

?>
