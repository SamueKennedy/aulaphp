<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
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
    <h1>Calculadora de IMC</h1>
    <form action="atv6ale.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <br>
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br>
        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>
