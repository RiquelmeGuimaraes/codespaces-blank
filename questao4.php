<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h2>Trabalho: Questão 04</h2>

        <form method="post">
            <label for="valorInicial">Aporte inicial (R$):</label>
            <input type="text" name="valorInicial" value="500" <?php echo isset($_POST['valorInicial']) ? $_POST['valorInicial'] : ''; ?> required>
            <label for="valorInicial">[limite: R$ 999.999,99]</label>
            <br>

            <label for="meses">Período em meses:</label>
            <input type="number" name="meses" value="12" <?php echo isset($_POST['meses']) ? $_POST['meses'] : ''; ?> min="1" max="480" required>
            <label for="meses">[1 a 480]</label>
            <br>

            <label for="taxaRendimentoMensal">Rendimento mensal (%):</label>
            <input type="text" name="taxaRendimentoMensal" value="0.68" <?php echo isset($_POST['taxaRendimentoMensal']) ? $_POST['taxaRendimentoMensal'] : ''; ?> required>
            <label for="taxaRendimentoMensal">[até 20%]</label>
            <br>

            <label for="aporteMensal">Aporte mensal:</label>
            <input type="text" name="aporteMensal" value="350" <?php echo isset($_POST['aporteMensal']) ? $_POST['aporteMensal'] : ''; ?> required>
            <label for="aporteMensal">[limite: R$ 999.999,99]</label>
            <br><br>

            <input type="submit" value="Calcular">
        </form><br>
    </main>
</body>

</html>