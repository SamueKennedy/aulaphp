<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resultado1 = floatval($_POST['avaliacao1']);
    $resultado2 = floatval($_POST['avaliacao2']); 
    $resultado3 = floatval($_POST['avaliacao3']);
    $resultado4 = floatval($_POST['avaliacao4']);
    $notaExame = isset($_POST['notaExame']) ? floatval($_POST['notaExame']) : null;

    $media = ($resultado1 + $resultado2 + $resultado3 + $resultado4) / 4;

    if ($media >= 7) {
        echo "Você foi aprovado com a média: "  . $media ;
    } else {
        echo "Você foi reprovado com a nota: "  . $media ;
        if ($notaExame === null) {
            echo "<br>Insira a nota do exame:";
            echo '<form action="atv1ale.php" method="post">
                    <input type="hidden" name="avaliacao1" value="'. $resultado1 .'">
                    <input type="hidden" name="avaliacao2" value="'. $resultado2 .'">
                    <input type="hidden" name="avaliacao3" value="'. $resultado3 .'"> 
                    <input type="hidden" name="avaliacao4" value="'. $resultado4 .'">
                    <input type="number" name="notaExame" required>
                    <input type="submit" value="Enviar">
                </form>';
        } else {
            $mediaFinal = ($media + $notaExame) / 2;
            if ($mediaFinal >= 5) {
                echo "Você foi aprovado em exame com a nova média: ";
            } else {
                echo "Você não foi aprovado com a nova média" ;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>

    <style>
       body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 20px;
    background-color:#C6F5BF;
    color: #2E482F;
    padding:24px;
}  

    </style>

</head>
<body>
    <form action="atv1ale.php" method="post">
        <label for="avaliacao1">Insira a nota 1:</label>    
        <input type="number" id="avaliacao1" name="avaliacao1" step="0.01" required>
        <br>

        <label for="avaliacao2">Insira a nota 2:</label>
        <input type="number" id="avaliacao2" name="avaliacao2" step="0.01" required>
        <br>

        <label for="avaliacao3">Insira a nota 3:</label>
        <input type="number" id="avaliacao3" name="avaliacao3" step="0.01" required>
        <br>

        <label for="avaliacao4">Insira a nota 4:</label>
        <input type="number" id="avaliacao4" name="avaliacao4" step="0.01" required>
        <br>

        <button type="submit" >Confirmar</button>
    </form>
</body>
</html>
