<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <link rel="stylesheet" href="style.css">

    <style>
        form {
            background-color: #f5f5f5;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form label {
            margin-bottom: 5px;
        }

        form input[type="number"],
        form input[type="radio"],
        form select,
        form input[type="submit"] {
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        pre {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            white-space: pre-wrap;
        }

        .exemplo-gerado {
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .index {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h2>Trabalho: Questão 04</h2>

        <form method="post">
            <label for="totalElementos">Total de Elementos (1 a 15):</label>
            <input type="number" name="totalElementos" value="<?php echo isset($_POST['totalElementos']) ? $_POST['totalElementos'] : 1; ?>" min="1" max="15" required>

            <br>

            <label>Selecione um elemento:</label><br>
            <input type="radio" name="elementoSelecionado" value="caixa-texto" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'caixa-texto') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Caixa de Texto</label> <br><br>

            <input type="radio" name="elementoSelecionado" value="senha" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'senha') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Senha</label> <br><br>

            <input type="radio" name="elementoSelecionado" value="botao" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'botao') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Botão</label> <br><br>

            <input type="radio" name="elementoSelecionado" value="radio" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'radio') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Radio</label> <br><br>

            <input type="radio" name="elementoSelecionado" value="caixa-selecao" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'caixa-selecao') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Caixa de Seleção</label> <br><br>

            <input type="radio" name="elementoSelecionado" value="faixa" <?php echo (isset($_POST['elementoSelecionado']) && $_POST['elementoSelecionado'] === 'faixa') ? 'checked' : '' ?>>
            <label for="elementoSelecionado">Faixa</label> <br><br>

            <input type="submit" value="Gerar elemento(s)">
        </form>

        <?php
        function gerarElemento($tipo)
        {
            switch ($tipo) {
                case 'caixa-texto':
                    return '<input type="text" name="caixa-texto1">';
                case 'senha':
                    return '<input type="password" name="senha1">';
                case 'radio':
                    return '<input type="radio" name="radio1"> <label for="radio1">Radio</label>';
                case 'caixa-selecao':
                    return '<select name="caixa-selecao">'
                        . '<option value="opcao1">opção 1</option>'
                        . '<option value="opcao2">opção 2</option>'
                        . '</select>';
                case 'faixa':
                    return '<input type="range" name="faixa" min = "0" max = "100">';
                case 'botao':
                    return '<input type="button" name="button" value="Botão">';
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalElementos = intval($_POST['totalElementos']);
            $elementoSelecionado = $_POST['elementoSelecionado'];
            $totalElementos = min(15, max(1, $totalElementos));
        }
        ?>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($elementoSelecionado)) : ?>

            <h3>Exemplos gerados:</h3>

            <?php
            for ($i = 0; $i < $totalElementos; $i++) {
                echo '<div class="exemplo-gerado">' . gerarElemento($elementoSelecionado) . '</div>';
            }
            ?>

            <h3>Código fonte do exmplo:</h3>
            <pre>
            <?php
            echo htmlentities('<input type="' . $elementoSelecionado . '" name="' . $elementoSelecionado . '">');
            ?>
        </pre>
        <?php endif ?>

        <br><br>

        <a class="index" href="index.html">Página Inicial</a><br><br>
    </main>
    <footer>
        <p>Riquelme & Vitória - &copy;2023</p>
    </footer>
</body>

</html>