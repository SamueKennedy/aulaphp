<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $peso = isset($_POST['peso']) ? floatval($_POST['peso']) : 0;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

    
    if ($altura <= 0) {
        echo "A altura deve ser maior que zero.";
        exit;
    }

    
    $imc = $peso / ($altura * $altura);

    
    $faixa = "";
    if ($imc < 18.5) {
        $faixa = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $faixa = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $faixa = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        $faixa = "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        $faixa = "Obesidade grau 2";
    } else {
        $faixa = "Obesidade grau 3 (mórbida)";
    }

    echo "<h1>Resultado do IMC</h1>";
    echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";
    echo "<p>Categoria: " . $faixa . "</p>";
} else {
    echo "Método de requisição inválido.";
}
?>
