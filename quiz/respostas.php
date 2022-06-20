<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<p>Seja bem-vindo(a/e) ".$_POST["nome"]."</p>";
echo "<p>Data de nascimento: ".$_POST["data_nascimento"]."</p>";
echo "<p>Nome da instituição: ".$_POST["instituicao"]."</p>";
echo "<p> Cidade em que mora: ".$_POST["selecao"]."</p><br>";

$questao1 = $_POST["pilares"];
$questao2 = $_POST["metodos"];
$questao3 = $_POST["void"];



$resposta1 = "aehp";
$resposta2 = "sgc";
$resposta3 = "a";


$acertou = 0;
$errou = 0;

    if($questao1==$resposta1) {
        $acertou ++;
        echo "<p> Primeira questão: Acertou, parabéns!<p>";
    } else {
        echo "<p> Errou. Resposta correta: Abstração, Encapsulamento, Herança e Polimorfismo.<p>";
    } 
    if($questao2 == $resposta2) {
        $acertou ++;
        echo "<p> Segunda questão: Acertou, parabéns!<p>";
    } else {
        echo "<p> Errou. Resposta correta: Setter, Getter, Construct.<p>";
    }
    if($questao3==$resposta3){
        $acertou ++;
        echo "<p> Terceira questão: Acertou, parabéns!<p>";

    } else {
       echo "<p> Errou. Resposta correta: Abstratos.<p>";

    }

    if($acertou==0) {
        echo "<p> Você errou todas as questões e tirou nota 0! Trate de estudar já, oxente!</p><br>";
    }

    if($acertou==1) {
        echo "<p> Você acertou uma questão e tirou nota 20. Precisa revisar melhor o conteúdo</p><br>";
    }

    if($acertou==2) {
        echo "<p> Você acertou duas questões e tirou nota 60. Está bom, mas ainda não é excelente. Estude mais para refazer o quiz</p><br>";
    }

    if($acertou==3) {
        echo "<p> Você acertou todas as questões. Sua nota foi 10. Que foi? Tá esperando meus parabéns? Isso não foi mais do que a sua obrigação. Eu hein! Se toca cara!</p><br>";
    }



    

?>

</body>
</html>