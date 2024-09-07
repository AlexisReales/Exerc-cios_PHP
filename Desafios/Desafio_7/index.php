<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salariom = 1412;
        $salario = $_GET["salario"] ?? $salariom;
    ?>
    <main>
        <h1>
            Informe Seu Salário
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?> " method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" step="0.01" name="salario" id="salario" value="<?= $salario?>">

            <span>Considerando o salário mínimo de <strong>R$ <?= number_format($salariom, 2, ",", ".")?></strong></span>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>
            Resultado Final
        </h2>

        <p>
            <?php
                $diferenca = $salario / $salariom;
                $resto = $salario - $salariom;
                echo "Quem recebe um salário de R$". number_format($salario, 2, ",", ".") . " ganha <strong>" . number_format($diferenca, 0) . " salário(s) mínimo(s) +</strong> R$" . number_format($resto, 2, ",", ".");
            ?>
        </p>
    </section>
</body>
</html>