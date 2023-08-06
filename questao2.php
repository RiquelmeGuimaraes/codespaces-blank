<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
    <link rel="stylesheet" href="questao2.css">
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>

    </header>

    <main>
        <h2>Questão 2</h2>
        <table>
            <thead>
                <th></th>
                <?php
                for ($x = 46; $x < 120 + 1; $x++) {
                    echo ("<th>$x</th>");
                }
                ?>
            </thead>
            <tbody>
                <?php
                for ($y = 146; $y < 210 + 1; $y++) {
                    echo ("<tr>");
                    echo ("<td>$y</td>");
                    for ($z = 46; $z < 120 + 1; $z++) {
                        $imc = $z / (($y * 0.01) * ($y * 0.01));
                        $conversaoImc = round($imc, 2);
                        switch (true) {
                            case ($conversaoImc >= 0 && $conversaoImc < 16):
                                echo ("<td class=\"baixomuitograve\" title=\"Baixo Muito Grave &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;
                            case ($conversaoImc >= 16 && $conversaoImc < 17);
                                echo ("<td class=\"baixograve\"title=\"Baixo Grave &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;

                            case ($conversaoImc >= 17 && $conversaoImc < 18.5);
                                echo ("<td class=\"baixo\" title=\"Baixo &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;

                            case ($conversaoImc >= 18.5 && $conversaoImc < 25);
                                echo ("<td class=\"ideal\" title=\"Ideal &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;

                            case ($conversaoImc >= 25 && $conversaoImc < 30);
                                echo ("<td class=\"sobrepeso\" title=\"Sobrepeso &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;

                            case ($conversaoImc >= 30 && $conversaoImc < 35);
                                echo ("<td class=\"obesidade1\" title=\"Obesidade 1 &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></
                            td>");
                                break;

                            case ($conversaoImc >= 35 && $conversaoImc < 40);
                                echo ("<td class=\"obesidade2\" title=\"Obesidade 2 &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;

                            case ($conversaoImc >= 40);
                                echo ("<td class=\"obesidade3\" title=\"Obesidade 3 &#013;$z kg&#013;$y cm&#013;$conversaoImc\"></td>");
                                break;
                        }
                    }
                    echo ("</tr>");
                }

                ?>
            </tbody>
        </table>
        <a href="index.html">Página Inicial</a>
    </main>
    <footer>
        <p>Riquelme & Vitória - &copy; 2023</p>
    </footer>

</body>

</html>