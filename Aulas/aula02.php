<?php
$nome = "Samuel Kennedy";
$dataNascimento = "25/12/07";
$cpf = "444444444-444";


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - PHP</title>
    <style>
        #btnAlerta{
            font-size:17px;
            color: white;
            background: black;
            border-radius:5px;
            border:none;
        }
    </style>
</head>
<body>
    <button id="btnAlerta">Mostrar alerta</button>
    <script>
       const btn = document.getElementById("btnAlerta")

       btn.addEventListener('click',function(){
        alert("Este é um exemplo de JavaScript")
       })
    </script>
    <hr>

    <h1>Ficha do Aluno</h1>
    <p>
        <strong> Nome:</strong> <?= $nome ?> <br>;
        <strong>Data Nascimento:</strong> <?= $dataNascimento ?><br>;
        <strong>cpf:</strong> <?= $cpf ?> <br>;
    </p>
    </body>
</html>