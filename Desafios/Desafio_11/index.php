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
        $produtoValor = $_GET['preco'] ?? 0;
        $porcentagem = $_GET['porcentagem'] ?? "0";
    ?>
    <main>
        <h1>
            Reajuste de Preços
        </h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?= $produtoValor?>">

            <label for="porcentagem">Qual será a porcentagem de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porcentagem?>">

            <input type="submit" value="Reajuste">
        </form>
    </main>
    <?php 
        $aumento = $produtoValor * $porcentagem / 100;
        $novop = $produtoValor + $aumento
    ?>
    <section>
        <h2>
            Resultado do Reajuste
        </h2>

        <span>
            <?= "O produto que custava R$" . number_format($produtoValor, 2, ",", ".") .", com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>R$" . number_format($novop, 2, ",", ".") . "</strong> a partir de agora!"?>
        </span>
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            const p = document.getElementById('p')
            p.innerText = porcentagem.value
        }
    </script>
</body>
</html>