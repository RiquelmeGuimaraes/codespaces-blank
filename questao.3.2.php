<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <h2>Questão 3</h2>
        <h3> Q2. ipsum dolor sit amet.</h3>

        <?php
        $url = "Q1={$_GET['Q1']}";
        echo ("
            <a href=\"questao.3.3.php?$url&Q2=A\">A) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.3.php?$url&Q2=B\">B) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.3.php?$url&Q2=C\">C) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.3.php?$url&Q2=D\">D) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao.3.3.php?$url&Q2=E\" style=\"color:green;\">E) Lorem ipsum dolor sit amet.</a><br><br>
            <a href=\"questao03.php\">Cancelar</a>"
        );

        ?>
    </main>
    <footer>
        <p>Riquelme & Vitória - &copy;2023</p>
    </footer>
</body>

</html>