<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h2>Questão 3</h2>
        <h3> Q3. ipsum dolor sit amet.</h3>

        <?php
        $url = "Q1={$_GET['Q1']}&Q2={$_GET['Q2']}";
        echo ("
            <a href=\"questao.3.4.php?$url&Q3=A\" style=\"color:green;\">A) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.4.php?$url&Q3=B\">B) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.4.php?$url&Q3=C\">C) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.4.php?$url&Q3=D\">D) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.4.php?$url&Q3=E\">E) Lorem ipsum dolor sit amet.</a><br><br>
            <a href=\"questao03.php\">Cancelar</a>"
        );

        ?>
    </main>
    <footer>
        <p>Riquelme & Vitória - &copy;2023</p>
    </footer>
</body>

</html>