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

        <?php
        function calcularInvestimento($valorInicial, $aporteMensal, $taxaRendimentoMensal)
        {
            $rendimentoMensal = ($valorInicial + $aporteMensal) * ($taxaRendimentoMensal / 100);
            $total = $valorInicial + $aporteMensal + $rendimentoMensal;
            return array($rendimentoMensal, $total);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valorInicial = floatval(str_replace(',', '.', $_POST['valorInicial']));
            //intval está sendo utilizado para converter um valor em um número inteiro
            $meses = intval($_POST['meses']);
            //floatval está sendo utilizado para converter um valor em um número com casas decimais
            $taxaRendimentoMensal = floatval(str_replace(',', '.', $_POST['taxaRendimentoMensal']));
            $aporteMensal = floatval(str_replace(',', '.', $_POST['aporteMensal']));

            $valorInicial = min(999999.99, max(0, $valorInicial));
            $meses = min(480, max(1, $meses));
            $taxaRendimentoMensal = min(20, max(0, $taxaRendimentoMensal));
            $aporteMensal = min(999999.99, max(0, $aporteMensal));

            $dadosInvestimento = array();
            $valorAtual = $valorInicial;
            for ($mes = 1; $mes <= $meses; $mes++) {
                $aporte = ($mes === 1) ? 0 : $aporteMensal;
                list($rendimentoMensal, $total) = calcularInvestimento($valorAtual, $aporte, $taxaRendimentoMensal);
                $dadosInvestimento[] = array(
                    'mes' => $mes,
                    'valorInicial' => number_format($valorAtual, 2, ',', '.'),
                    'aporteMensal' => number_format($aporte, 2, ',', '.'),
                    'rendimentoMensal' => number_format($rendimentoMensal, 2, ',', '.'),
                    'total' => number_format($total, 2, ',', '.')
                );
                $valorAtual = $total;
            }
        }
        ?>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($dadosInvestimento)) : ?>

            <table class="tabela4">
                <tr>
                    <th>Mês</th>
                    <th>Valor Inicial</th>
                    <th>Aporte Mensal</th>
                    <th>Rendimento</th>
                    <th>Total</th>
                </tr>
                <?php foreach ($dadosInvestimento as $dados) : ?>

                    <tr>
                        <td><?php echo $dados['mes']; ?></td>
                        <td><?php echo 'R$ ' . $dados['valorInicial'] ?></td>
                        <td><?php echo 'R$ ' . $dados['aporteMensal'] ?></td>
                        <td><?php echo 'R$ ' . $dados['rendimentoMensal'] ?></td>
                        <td><?php echo 'R$ ' . $dados['total'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        <br><br>

        <a class="index" href="index.html">Página Inicial</a><br><br>
    </main>
    <footer>
        Riquelme & Vitória - &copy;2023
    </footer>
</body>

</html>