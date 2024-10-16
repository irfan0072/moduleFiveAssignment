<?php

$subMarks =[
    "Bangla" => 100,
    "English" => 33,
    "Math" => 314,
    "Science" => 33,
    "Islam" => 33,
];
function calculateResult($subMarks){
    $totalMarks = 0;
    $subjects = count($subMarks);
    foreach($subMarks as $subject => $mark){
        if($mark < 0 || $mark > 100){
            echo "Mark range for $subject is invalid.";
            return;
        }
        $totalMarks += $mark;
        
    }
    foreach($subMarks as $subject => $mark){
        if($mark < 33){
            echo "Failed in $subject.";
            return;
        }
    }

    $averageMarks = $totalMarks / $subjects;
    switch(true){
        case($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case($averageMarks >= 70 && $averageMarks <= 79):
            $grade = "A";
            break;
        case($averageMarks >= 60 && $averageMarks <= 69):
            $grade = "A-";
            break;
        case($averageMarks >= 50 && $averageMarks <= 59):
            $grade = "B";
            break;
        case($averageMarks >= 40 && $averageMarks <= 49):
            $grade = "C";
            break;
        case($averageMarks >= 33 && $averageMarks <= 39):
            $grade = "D";
            break;
        case($averageMarks >= 0 && $averageMarks <= 32):
            $grade = "F";
            break;
    }
    echo "Total marks: $totalMarks<br>";
    echo "Average marks: $averageMarks<br>";
    echo "Grade: $grade";
    
}

calculateResult($subMarks);

