<?php
for($number = 1;$number <= 10;$number++){
    $multiplicacao = $_GET['numero'];
    $resultado = $multiplicacao*$number;
    echo $multiplicacao."x".$number. "=".$resultado ."<br>";
}


?>