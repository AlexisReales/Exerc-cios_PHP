<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar número aleatório</title>

    <link rel="stylesheet" href="../../ex004/style.css">
</head>
<body>
    <header>
        <h1>
            Número aleatório
        </h1>
    </header>

    <main>
        <p>
            Gerando número aleatório entre 0 e 100
        </p>
        <?php 
            // rand() também gera números (1951) - Lento
            // mt_rand também gera números (1997) - 4x mais rápidoe confiavel
            // random_int() gera números aleatórios criptografados e seguros - Muito Lento

            $num = mt_rand(0, 100);
            echo "<p>O valor gerado foi <strong>$num</strong> </p>";
        ?>
        <input type="submit" value="Gerar outro valor" onclick="location.reload()">
    </main>
</body>
</html>