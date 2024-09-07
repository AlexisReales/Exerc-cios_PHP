<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"] ?? 0;
        $peso1 = $_GET["peso1"] ?? 1;
        $valor2 = $_GET["valor2"] ?? 0;
        $peso2 = $_GET["peso2"] ?? 1;
    ?>
    <main>
        <h1>
            Médias Aritméticas
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1* Valor</label>
            <input type="number" name="valor1" id="valor2" value="<?= $valor1?>" required>
            
            <label for="peso1">1* peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1?>" required min="1"> 
            
            <label for="valor2">2* Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2?>" required>
            
            <label for="peso2">2* Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2?>" required min="1">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <?php 
            $medias = ($valor1 + $valor2) / 2;
            $mediap = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2)
        ?>
        <h2>
            Cálculo das Médias
        </h2>

        <span><?= "Analisando os valores $valor1 e $valor2:"?></span>
        <ul>
            <li>
                <?= "A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($medias, 2, ",")?>
            </li>
            <li>
                <?= "A <strong>A média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a " . number_format($mediap, 2, ",")?>
            </li>
        </ul>
    </section>
</body>
</html>