<?php

$array = range(10, 45);

for($i = 0; $i < count($array); $i++) {
    $plusSix = $array[$i] += 6;
    if($plusSix >= 30) {{
        echo "O número $plusSix é muito alto! <br>";
    }} else { 
        echo "O número" . " " .$array[$i] . " " . "é de tamanho normal! <br>";
    }
}
