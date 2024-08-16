<?php

    $valorcusto = $_POST['valor'];
    $acrescimo = $_POST['add'];

    $percentual = $valorcusto * ($acrescimo / 100);
    $valorvenda = $valorcusto + $percentual;

    echo 'O valor de venda foi de: R$' . $valorvenda;

?>