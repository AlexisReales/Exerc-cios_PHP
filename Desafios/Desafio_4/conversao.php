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

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $capital = $_GET["capital"] ?: 0;
            $toDolar = $capital / $cotacao;
            $format = number_format($toDolar, 2, ",", ".");
            echo "Seus R$" . number_format($capital, 2, ",", ".") . " equivalem a US$$format";
            echo "<br>";
            echo "<p><strong>Cotação fixa do banco central</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>