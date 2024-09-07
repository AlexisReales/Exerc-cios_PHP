<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número quadrado</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>
            Informe o Número
        </h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>
            Resultado Final
        </h2>

        <span><?= "Analisando o <strong>número $numero</strong>, temos:"?></span>
        <ul>
            <li>
                <?= "A sua raiz quadrada é <strong>" . number_format(sqrt($numero), 3, ",", "."). "</strong>"?>
            </li>
            <li>
                <?= "A sua raiz cúbica é <strong>" . number_format($numero ** (1/3), 3, ",",".") . "</strong>"?>
            </li>
        </ul>
    </section>
</body>
</html>