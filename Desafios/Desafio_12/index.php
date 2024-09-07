<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total_segundos = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>
            Calculadora de Tempo
        </h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de Segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?= $total_segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>\

    <?php 
        $sobra = $total_segundos;
        $semanaS = 604_800;
        $diaS = 86_400;
        $horaS = 3_600;
        $minutoS = 60;

        // Total de semanas
        $semana = (int) ($sobra / $semanaS);
        $sobra = $sobra % $semanaS;

        // Total de Dias
        $dia = (int) ($sobra / $diaS);
        $sobra = $sobra % $diaS;

        // Total de Horas
        $hora = (int) ($sobra / $horaS);
        $sobra = $sobra % $horaS;

        // Total de Minutos
        $minuto = (int) ($sobra / $minutoS);
        $sobra = $sobra % $minutoS;

        // Total de Segundos
        $segundo = $sobra;
    ?>

    <section>
        <h2>
            Totalizando
        </h2>
        <p>
            <?= "Analisando o valor que você digitou, <strong>" . number_format($total_segundos, 2, ",", ".") . " segundos</strong>, equivalem a um total de:"?>
        </p>
        <ul>
            <li>
                <?= "$semana semanas"?>
            </li>
            <li>
                <?= "$dia dias"?>
            </li>
            <li>
                <?= "$hora horas"?>
            </li>
            <li>
                <?= "$minuto minutos"?>
            </li>
            <li>
                <?= "$segundo segundos"?>
            </li>
        </ul>
    </section>
</body>
</html>