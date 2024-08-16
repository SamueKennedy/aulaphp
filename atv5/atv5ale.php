<?php

    $algarismo = $_POST['num'];

    if (is_numeric($algarismo)) {
        echo "$algarismo é um número inteiro.";
    } else {
        echo "$algarismo não é um número inteiro.";
    }

    if ($algarismo < 18) {
        echo "Menor de idade!";
    } else {
        echo "Maior de idade!";
    }
?>