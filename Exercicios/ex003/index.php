<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Teste de Tipos Primitivos
    </h1>
    <?php 
        // 0x = Hexadecimal
        // 0b = Binário
        // 0 = Octal

        $v = (int) 3e2; 
        var_dump($v);

        echo "<br>";
        echo "<br>";

        $array = [1,2,3,4];
        $array = array(
            1,
            2
        );
        var_dump($array);

        echo "<br>";
        echo "<br>";

        class Pessoa {
            private String $nome;
        }

        $p = new Pessoa;
        var_dump($p);

        echo "<br>";
        echo "<br>";

        echo "Estamos no ano " . date('Y');

        echo "<br>";
        
        echo "Estamos no mês " . date('M');

        echo "<br>";

        echo "Estamos no dia " . date('d') . " " . date('D');

        echo "<br>";
        echo "<br>";

        $anoNasci = 2005;
        echo 'Eu tenho ' . date('Y') - "$anoNasci " . 'anos';

        echo "<br>";
        echo "<br>";

        // Só funciona no modo TextArea - Heardoc - Funciona como aspas duplas por multiplas linhas
        $curso = 'PHP';
        echo <<< FRASE
            Estou Estudando $curso 
        FRASE;

        // Só funciona no modo TextArea - Nowdoc - Funciona como aspas simples por multiplas linhas
        echo <<< 'FRASE'
            Estou Estudando $curso 
        FRASE;
    ?>
</body>
</html>