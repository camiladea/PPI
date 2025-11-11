<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro IMC</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form method="post" action="">
        Nome: <input type="text" name="nome"><br><br>
        Email: <input type="email" name="email"><br><br>
        Peso (kg): <input type="number" step="0.1" name="peso"><br><br>
        Altura (m): <input type="number" step="0.01" name="altura"><br><br>
        <input type="submit" value="Cadastrar">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    if ($nome && $email && $peso > 0 && $altura > 0) {
        $imc = $peso / ($altura * $altura);
        echo "<h3>Resultado:</h3>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Peso: $peso kg<br>";
        echo "Altura: $altura m<br>";
        echo "IMC: " . number_format($imc, 2);
    } else {
        echo "<p>Preencha todos os campos corretamente.</p>";
    }
}
?>
</body>
</html>
