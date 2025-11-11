<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma em PHP</title>
</head>
<body>
    <h2>Somar dois números</h2>

    <form action="" method="get">
        <label for="inputA">A:</label>
        <input type="number" id="inputA" name="a" required>

        <label for="inputB">B:</label>
        <input type="number" id="inputB" name="b" required>

        <input type="submit" value="Somar">
    </form>

    <?php
    if (isset($_GET['a']) && isset($_GET['b'])) {
        $a = $_GET['a'];
        $b = $_GET['b'];
        $soma = $a + $b;

        echo "<h3>Resultado: $a + $b = $soma</h3>";
    }

    
    ?>
</body>
</html>
