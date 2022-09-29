<?php

$people = [
    "Andrey" => ["Age" => 18,
                 "Weight" => 76,
                 "Length" => 178,
                ],
    "Ivan" => ["Age" => 24,
                 "Weight" => 83,
                 "Length" => 185,
                ],
    "Anastasia" => ["Age" => 20,
                 "Weight" => 59,
                 "Length" => 167,
                ],
];

// echo "<pre>";
// print_r($people["Ivan"]["Weight"]);
// echo "</pre>";

function getArrayElements(...$arr)
{
    foreach ($arr as $value1) {
        foreach ($value1 as $key2 => $value2) {
            print_r($value1) . "<br>";
        }
    }
}

getArrayElements($people);

?>