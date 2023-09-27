<?php

$studentGrades =[
    "Student1" => array("Math" => 90, "English" => 85, "Science" => 78),
    "Student2" => array("Math" => 76, "English" => 92, "Science" => 88),
    "Student3" => array("Math" => 89, "English" => 80, "Science" => 91)
];
function averageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $average = $total / count($subjects);
        echo "Average grade for $student: $average <br>";
    }
}
averageGrades($studentGrades);

?>
