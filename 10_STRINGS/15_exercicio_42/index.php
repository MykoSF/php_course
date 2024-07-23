<?php

$str = "Cade meu queijo? Ele estava aqui em cima!";

$selection = substr($str, 8, -26) . "<br>" . substr($str, 20, -13);

echo $selection;