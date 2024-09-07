<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisao Anatomia</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo = $_GET["dividendo"] ?? 10;
        $divisor = $_GET["divisor"] ?? 6;
    ?>
    <main>
        <h1>
            Anatomia de uma Divisão
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor?>">

            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>
            Estrutura da Divisão
        </h2>
        <div class="contant" style="display: flex; align-items: center;">
            <div class="left" style="display: flex; flex-direction: column; width: 50%; align-items: center; font-size: 30px;">
                <?= "<p>$dividendo</p>"?>
                <?php 
                    $resto = $dividendo % $divisor;
                    echo "<span><u> $resto </u></span>";
                ?>
            </div>
            <div class="right" style="display: flex; flex-direction: column; width: 50%; align-items: center; font-size: 30px;">
                <?= "<span style='border-left: 2px solid #000; '>$divisor</span>"?>
                <div class="line" style="background-color: #000; height: 2px; width: 50%;"></div>
                <?php 
                    $resultado = $dividendo / $divisor;
                    echo "<span><em> " . number_format($resultado, 0) . "</em></span>"
                ?>
            </div>
        </div>
    </section>
</body>
</html>