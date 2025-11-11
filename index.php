<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos PHP - Vetores e Estruturas</title>
</head>
<body>
    <h1>Introdução</h1>
    <?php
    echo "<p>Olá!</p>";
    $nome = "banana";
    echo "<p>Variável nome: $nome</p>";
    ?>

    <h1>Tipos de Dados em PHP</h1>
    <h2>Exemplo de Soma</h2>
    <?php
    $a = 5;
    $b = 6;
    echo "<p>Resultado da soma: " . ($a + $b) . "</p>";
    ?>

    <h1>Vetores</h1>

    <h2>Array Numérico</h2>
    <p>Podemos criar um vetor simplesmente definindo um elemento.</p>
    <?php
    $vetor = array(20, 19, 22, 19, 23);
    for ($posicao = 0; $posicao < 5; $posicao++) {
        echo $vetor[$posicao] . '<br />';
    }
    ?>

    <h2>Array Associativo</h2>
    <p>Podemos criar vetores associando chaves a valores.</p>
    <?php
    $vetor2 = array(
        'nome' => 'Guilherme',
        'sobrenome' => 'Silva',
        'cpf' => '123.456.789-00'
    );

    echo 'Nome: ' . $vetor2['nome'] . '<br />';
    echo 'Sobrenome: ' . $vetor2['sobrenome'] . '<br />';
    echo 'CPF: ' . $vetor2['cpf'] . '<br />';
    ?>

    <h1>Estruturas de Controle</h1>
    <h2>Laço FOR</h2>
    <p>O comando <code>for</code> é semelhante ao <code>while</code>, porém possui inicialização e incremento.</p>
    <?php
    echo "<h3>Tabuada do 9</h3>";
    for ($atual = 0; $atual < 11; $atual++) {
        echo "9 * $atual = " . (9 * $atual) . "<br />";
    }
    ?>

    
</body>
</html>
