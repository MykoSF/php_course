<?php   

$array = [
    "Maykon", 
    18, 
    true, 
    "Fonseca",
    3.1415,
    1.61,
    "Santana",
    false,
    20,
    6,
];

$count = count($array);
$start = 0;

while($start < $count) {
    if(is_string($array[$start])) {
        echo $array[$start] . "<br>";
    }   
    $start++;
}