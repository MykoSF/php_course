<?php


$array = ["frango", "arroz", "feijao"];

if(in_array("frango", $array)) {
    echo "tem frango!!";
} else {
    echo "não tem frango D;";
}

echo "<br>";

if(in_array("teste", $array)) {
    echo "tem teste!!";
} else {
    echo "não tem teste D;";
}