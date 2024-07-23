<?php   

$a = (int) "12";

echo $a;
echo "<br>";

$b = $a + (int) "312";
echo $b;

if(is_int($a)) {
    echo "<br> é um int";
}