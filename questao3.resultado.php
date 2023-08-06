<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <script src="https://kit.fontawesome.com/5eb1deab40.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1>Desenvolvimento Web</h1>
    </header>
    <main>
        <?php
        switch ($_GET['Q1']) {
            case "C":
                echo ("1 - {$_GET['Q1']} - <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("1 - {$_GET['Q1']} - <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }

        switch ($_GET['Q2']) {
            case "E":
                echo ("2 - {$_GET['Q2']} - <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("2 - {$_GET['Q2']} - <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }

        switch ($_GET['Q3']) {
            case "A":
                echo ("3 - {$_GET['Q3']} - <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("3 - {$_GET['Q3']} - <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        switch ($_GET['Q4']) {
            case "B":
                echo ("4 - {$_GET['Q4']} - <i class=\"fa-regular fa-circle-check\"></i><br>");
                break;
            default:
                echo ("4 - {$_GET['Q4']} - <i class=\"fa-regular fa-circle-xmark\"></i><br>");
                break;
        }
        ?>

        <a href="index.html">Página Inicial</a>
    </main>
</body>

</html>