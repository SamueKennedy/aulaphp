<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - 02</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 20px;
        background-color: #C6F5BF;
        color: #2E482F;
        padding: 24px;
      }
    </style>
</head>
<body>
    <form action="atv2ale.php" id="form" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <p></p>
        <label for="pagamento">Pagamento Fixo:</label>
        <input type="number" id="pagamento" name="pagamento" step="0.01">
        <p></p>
        <button type="submit">Confirmar</button>
    </form>
</body>
</html>
