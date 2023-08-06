<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <link rel="stylesheet" href="style.css">
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
        <a class="index" href="index.html">Página Inicial</a><br><br>
    </main>
    <footer>
        Riquelme & Vitória - &copy;2023
    </footer>
</body>

</html>