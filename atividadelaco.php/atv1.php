<?php

//Atividade 1: Declare variáveis para seu nome, idade e cidade natal, e exiba os valores usando echo.

$nome = "Samuel Kennedy";
$idade = "16";
$cidadeNatal = "Marília";

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Cidade Natal: $cidadeNatal <br>";


//Atividade 2:  Declare uma variável para a idade e use estruturas condicionais para verificar se a pessoa é menor de idade, adulta ou idosa, exibindo uma mensagem apropriada.

echo "<hr>";

$idade = 16;

if($idade < 18){
    echo "Você é menor de idade <br>";

}else if($idade >= 18 && $idade < 60){
    echo "Você é adulto <br>";
}else{
    echo "Você é idoso <br>";
}

//Atividade 3: Use um laço for para exibir os números de 1 a 10.

echo "<hr>";

for($contador = 1;$contador <= 10; $contador++){
    echo $contador . "<br>";
}
//Atividade 4: Use um laço while para exibir os números de 1 a 5 e um laço do...while para exibir os números de 6 a 10.

echo "<hr>";

$contador = 1;

while($contador <= 5){
    echo $contador . "<br>";
    $contador++;
}

$contagem = 6;

while($contagem <= 10){
    echo $contagem . "<br>";
    $contagem++;
}

//Atividade 5: Crie um algoritmo que exiba a tabuada de um numero determinado, de 1 a 10, usando um laço for.

$numero = 7;


for($contador = 1;$contador <= 10; $contador++){
    echo $numero*$contador . "<br>";
}

//Atividade 6: Crie uma função que receba um nome como parâmetro e retorne uma mensagem de saudação, e chame a função com diferentes nomes para exibir as mensagens.

echo "<hr>";

function saudacao ($name) {
    echo "Olá" . $name . ", seja bem vindo!  <hr>";
}
saudacao(" Samuel");
saudacao(" Matheus");
saudacao(" Robson");

//Atividade 7: Crie uma função que receba a largura e a altura de um retângulo como parâmetros e retorne a área, chamando a função com diferentes valores para exibir os resultados.

$largura = 10;
$altura = 5;

$area = $largura*$altura;
    echo "A área do retângulo é:" . $area;

//Atividade 8: Crie uma string com seu nome completo e use funções de manipulação de strings para exibir o nome em letras maiúsculas, minúsculas e apenas a primeira letra de cada palavra em maiúsculas.

echo "<hr>";

$nome = "Samuel Kennedy Nalon Alcantara";

$nome_minusculo = strtolower($nome);
    echo "O nome com letras minúsculas é:" . $nome_minusculo . "<br>";


$nome_maiusculo = strtoupper($nome);
    echo "O nome com letras maiúsculas é:" . $nome_maiusculo . "<br>";

$nome_primeira_letra = ucwords(strtolower($nome));
    echo "O nome com as primeiras letras maiúsculas é:" . $nome_primeira_letra;    
//Atividade 9: Declare variáveis para armazenar as notas de três disciplinas diferentes. Em seguida, crie uma função que calcule a média das três notas e exiba o resultado.
 
echo "<hr>";

$notamatematica = 7;
$notaciencias = 9;
$notaportugues = 4;

$media = ($notaciencias + $notamatematica + $notaportugues)/3;
    echo "A média das notas é:" . $media;

//Atividade 10: Crie uma função que receba um número como parâmetro e retorne se o número é par ou ímpar. Chame a função com diferentes números e exiba os resultados.

echo "<hr>";

$numero = 72;

if($numero %2 === 0){
    echo "O número é par";
}else{
    echo "O número é ímpar";
}


?>