// Sintaxes para aprender

<?php
    // Mensagem de Boas Vindas
    echo "Olá!<br>";

    // Variáveis
    $idade = 26;

    // Estrutura condicional
    if ($idade >= 18) {
        echo "Maior de idade.";
    } else {
        echo "Menor de idade.";
    }

    // Laços
    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }
    while ($i < 5) {
        echo $i;
        $i++;
    }

    // Chamada de função
    function saudacao($nome) {
        return "Olá, " . $nome;
    }
    echo saudacao("Arthur");
    
    // Arrays
    $frutas = ["maçã", "banana", "laranja"];
    echo $frutas[0]; // Exibe maçã

    // Strings (com aspas simples e duplas)
    $texto1 = 'Olá mundo!';
    $num = 10; // Definindo $num
    $texto2 = "O número é: $num"; // Interpolação de variável
    echo $texto2 . "<br>"; // Exibindo $texto2

    // Operadores
    $soma = 10 + 5; // Aritmético
    $maior = (5 > 3); // Relacional
    $verdadeiro = (true && false); // Lógico
?>