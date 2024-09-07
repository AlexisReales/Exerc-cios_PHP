<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "Terça", time() + 3600);
                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1>Super global \$_GET</h1>";
                var_dump($_GET);

                echo "<h1>Super Global \$_POST</h1>";
                var_dump($_POST);

                echo "<h1>Super Global \$_REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Super Global \$_COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global \$_SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Super Global \$_ENV</h1>";
                var_dump($_ENV);

                echo "<h1>Super Global \$_SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Super Global \$GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>