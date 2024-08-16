<?php

$nome = "Samuel Kennedy";
$idade = "16";
$altura = 1.85;
$aceitoTermo = true;
$aceito2Termo = 1;

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Altura: $altura <br>";

echo "<hr>";

//Estrutura Condicional

#Verificar se pode votar

$idade = 18;

if($idade >= 16){
    echo "Pode votar <br> ";
}else{
    echo "Não pode votar <br>" ;
}
#Verificar se é menor de idade, adulto ou idoso

$idade = 22;

if($idade < 18){
    echo "Menor de idade <br>";
}else if($idade >= 18 && $idade < 60){
    echo "Adulto <br>";
}else{
    echo "Idoso <br>";
}

#qual a cor preferida, vermelho, azul, verde

$cor = "vermelho";

switch($cor){
    case "vermelho":
        echo "Minha cor favorita é vermelho";
        break;
    case "azul":
        echo "Minha cor favorita é azul";
        break;
    case "verde":
        echo "Minha cor favorita é verde";
        break;
    default:
        echo "Nenhuma cor foi selecionada";                        
}

echo "<hr>";
#Imprima na tela os números de 1 a 5

$contador = 1;

while($contador <= 5){
    echo $contador . "<br>";
    $contador++;
}

echo "<hr>";

 for($contagem = 1; $contagem <= 5; $contagem++){
    echo $contagem . "<br>";
}

echo "<hr>";

function saudacao($nome){
    echo "Olá " . $nome. ", seja bem vindo!";
}

saudacao("Samuel");
?>