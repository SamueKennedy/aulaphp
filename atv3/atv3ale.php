<?php

    $A = $_POST['value1'];
    $B = $_POST['value2'];

    $temp = $A; 
    $A = $B;
    $B = $temp;

    echo "Valor de A: " . $A . "valor de B: " . $B;
?>