<?php

$a = "O rato roeu a roupa do rei de roma";
echo strlen($a);
echo "<br> <br>";

for($i = 0; $i < strlen($a); $i++) {
    if($a[$i] === "a") {
        echo $a[$i] . "<br>";
    }
}