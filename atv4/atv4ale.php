<?php


    $numero = $_POST['algarismo'];
    
    if (is_numeric($numero)) {
        echo "$numero é um número inteiro.";
    } else {
        echo "$numero não é um número inteiro.";
    }

    if ($numero % 2 === 0) {
        echo $numero . " é um número par";
    } else {
        echo $numero . " é um número ímpar";
    }
?>