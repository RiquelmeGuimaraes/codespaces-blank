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
        <h3> Q4. ipsum dolor sit amet.</h3>

        <?php
        $url = "Q1={$_GET['Q1']}&Q2={$_GET['Q2']}&Q3={$_GET['Q3']}";
        echo ("
            <a href=\"questao3.resultado.php?$url&Q4=A\">A) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao3.resultado.php?$url&Q4=B\" style=\"color:green;\">B) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao3.resultado.php?$url&Q4=C\">C) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao3.resultado.php?$url&Q4=D\">D) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao3.resultado.php?$url&Q4=E\">E) Lorem ipsum dolor sit amet.</a><br>
            <a href=\"questao03.php\">Cancelar</a>"
        );

        ?>
    </main>
    <footer>
        <p>Riquelme & Vitória - &copy;2023</p>
    </footer>
</body>

</html>