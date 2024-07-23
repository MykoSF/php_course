<?php 

    $pi =  3.141592;
    $golden_ratio  = 1.61803;
    $square_root_of_two = 1.414213;

    $crazy_number = $golden_ratio - $square_root_of_two - $pi;

    echo $crazy_number;
    echo "<br>";

    if(is_float($crazy_number)) {
        echo "the crazy number is in fact, a float";
    } else "the crazy number aint't a float";

?>
