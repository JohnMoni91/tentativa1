<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//1
function isFibonacci($num) {
    if ($num < 0) return false;
    
    $a = 0;
    $b = 1;
    
    while ($a < $num) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }
    
    return $a == $num;
}

$num = 13; // Você pode definir qualquer número ou pegar de uma entrada do usuário

if (isFibonacci($num)) {
    echo "$num pertence à sequência de Fibonacci.\n";
} else {
    echo "$num não pertence à sequência de Fibonacci.\n";
}
?>
<br>

<?php
//2
function countLetterA($str) {
    $count = substr_count(strtolower($str), 'a');
    return $count;
}

$str = "A raposa ágil saltou sobre a árvore."; // String de exemplo

$count = countLetterA($str);
echo "A letra 'a' aparece $count vezes na string.\n";
?>
<br>
<?php
//3
$indice = 12;
$soma = 0;
$k = 1;

while ($k < $indice) {
    $k = $k + 1;
    $soma = $soma + $k;
}

echo $soma;
?>
<br>
<?php
/* 4) Descubra a lógica e complete o próximo elemento:
a) 1, 3, 5, 7, 9
b) 2, 4, 8, 16, 32, 64, 128
c) 0, 1, 4, 9, 16, 25, 36, 49
d) 4, 16, 36, 64, 100
e) 1, 1, 2, 3, 5, 8, 13
f) 2,10, 12, 16, 17, 18, 19, 20
*/

//5

/* Percebendo que existem 3 quartos cada um com uma lâmpada: Durante a primeira viagem: 

- Ligo o interruptor 10 por 15 minutos e  desligo, depois ligo o interruptor 2, assim ao mesmo tempo vou para um dos 3 quartos. 
- Se a lâmpada estiver acesa será o interruptor 2, se estiver apagada e quente pertence ao interruptor 1, se estiver apagada e fria pertence ao interruptor 3. 

Durante a segunda viagem:
- Sabendo  a qual chave pertence, deixo apenas uma e uma desligada entre as demais
- Vou para outro quarto e encontro os outros dois.*/
?>
</body>
</html>