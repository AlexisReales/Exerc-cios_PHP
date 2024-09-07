<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>

    <link rel="stylesheet" href="../../ex004/style.css">
</head>
<body>
    <header>
        <h1>
            Analisador
        </h1>
    </header>
    <main>
        <?php 
            $num = $_GET["number"] ?: 0;
            echo "<p>Analisando o numero <strong> $num </strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do numero é " . number_format(round($num), 0, ",", ".") . "</li>";
            echo "<li>A parte fracionária do numero é " . (int) substr(strpbrk($num, '.,'), 1) . "</li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>