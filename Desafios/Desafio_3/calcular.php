<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertido</title>

    <link rel="stylesheet" href="../../ex004/style.css">
</head>
<body>
    <header>
        <h1>
            Seu dinheiro convertido
        </h1>
    </header>
    <main>
        <?php 
            // $padrao = numfmt_create("lugar desejado(pt_BR)" NumberFormatter::CURRENCY);
            // numfmt_format_currency($padrao, $variável, "moeda desejada (BRL)")
            // Biblioteca intl

            $capital = $_GET["capital"] ?: 0;
            $dolar = 5.51;
            $toDolar = $capital / $dolar;
            $format = number_format($toDolar, 2, ",", ".");
            echo "Seus R$" . number_format($capital, 2, ",", ".") . " equivalem a US$$format";
            echo "<br>";
            echo "<p><strong>Cotação fixa de $dolar</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>