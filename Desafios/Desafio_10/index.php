<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Calculadora</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNasceu = $_GET['nasceu'] ?? 2000;
        $anoSaber = $_GET['saber'] ?? date('Y');
    ?>
    <main>
        <h1>
            Calculando sua Idade
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="nasceu">Em que ano você nasceu?</label>
            <input type="number" name="nasceu" id="nasceu" value="<?= $anoNasceu?>" required max="<?= date('Y')?>" min="<?= date('Y') - 100?>">
    
            <label for="saber">Quer saber sua idade em que ano? (estamos atualmente em <strong><?= date('Y')?></strong>)</label>
            <input type="number" name="saber" id="saber" value="<?= $anoSaber?>" required min="<?= $anoNasceu?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <?php 
           (int) $idade = $anoSaber - $anoNasceu
        ?>
        <h2>
            Resultado
        </h2>

        <span>
            <?= "Quem nasceu em $anoNasceu terá <strong>$idade anos</strong> em $anoSaber"?>
        </span>
    </section>
</body>
</html>