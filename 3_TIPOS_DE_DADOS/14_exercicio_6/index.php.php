<?php

    $carro = ['cor' => 'prata deserto',
    'marca' => 'volkswagen', 
    'ano' => 2006];


    echo ($carro)['cor'];
    echo '<br>';
    echo ($carro)['marca'];
    echo '<br>';
    echo ($carro)['ano'];

    $cor = ($carro)['cor'];
    $marca = ($carro)['marca'];
    $ano = ($carro)['ano'];
    echo '<br>';

    echo "O carro é da marca $marca, possui a cor $cor e foi desenvolvido no ano de $ano";

?>