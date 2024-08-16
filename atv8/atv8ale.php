<?php


    $custo = $_POST['valor'];
    $distribuidor = 28/100;
    $impostos = 45/100;

    $valor = $custo + ($custo * $distribuidor) + ($impostos * $custo);
    
    echo "O valor do carro é de: R$" . $valor;
?>