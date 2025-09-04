<?php
// Aqui vai o código PHP

// Para criar variáveis, use $ junto com o nome da variável desejada
// O PHP é fracamente tipado, não precisamos declarar um tipo.
$nome = "Gabriel";

// Imprime texto na tela
echo "<h1 style='color: red;'>Olá, mundo!</h1>";
echo "<p>Nome: " . $nome . "</p>"; // O ponto concatena (junta) textos e variáveis

// Para criar variáveis numéricas, basta não usar aspas
$anoNascimento = 2005;

// Em PHP, cálculo funciona como em toda linguagem de programação
$idade = 2025 - $anoNascimento;

echo "<p>Idade: " . $idade . "</p>";

// O PHP permite inetar variáveis dentro de textos com aspas duplas
echo "<p>Meu nome é $nome, nasci em $anoNascimento e, portanto, tenho $idade anos.</p>";

?>

<!-- Aqui vai o código HTML -->