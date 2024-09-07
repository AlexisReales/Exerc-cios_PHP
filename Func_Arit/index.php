<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritimédicas</title>
</head>
<body>
    <?php 
        // Vetor
        echo "O vetor de 200 é " . abs(200);

        echo "<br>";

        echo "O vetor de 200 é " . abs(-200);

        echo "<br>";
        echo "<br>";

        // Conversor de Base Númerica (Decimal, Hexa e Octa...) - 1* é o valor que você quer, 2* base que o número está e 3* base que voc6e quer o resultado
        echo "A converção de 200 em decimal para octal é " . base_convert(200, 10, 8);
        echo "<br>";
        echo "A converção de 200 em decimal para Hexadecimal é " . base_convert(200, 10, 6);
        echo "<br>";
        echo "A converção de 200 em decimal para binário é " . base_convert(200, 10, 2);

        echo "<br>";
        echo "<br>";

        // Funções de arredondamento
            // Arredonda pra cima 
            echo "2.8 arredondado para cima é " . ceil(2.8);
            echo "<br>";
            echo "3.2 arredondado pra cima é " . ceil(3.2);
            echo "<br>";

            // Arredonda pra baixo 
            echo "8.7 arredondado pra baixo é " . floor(8.7);
            echo "<br>";

            // Arredonda
            echo "6.9 arredondado é " . round(6.9);
            echo "<br>";
            echo "3.3 arredondado é " . round(3.3);
          
            echo "<br>";
            echo "<br>";

        // função para cálculo de Hipotenusa
        echo "Hipotenusa de 3 + 3 é " . hypot(3, 3);
        
        echo "<br>";
        echo "<br>";

        // Função para divisão inteira
        echo "Divisão inteira entre 5 e 2 " . intdiv(5, 2);

        echo "<br>";
        echo "<br>";

        // Mostram o valor mínimo e máximo de cada sequencia
        echo "Valor mínimo entre uma sequência de números " . min(10, 30, 40, 50);
        echo "<br>";
        echo "Valor máximo entre uma sequência de números " . max(10, 30, 40, 50);

        echo "<br>";
        echo "<br>";

        // Mostrar o valor de pi
        echo "O valor de pi em uma função é " . pi();
        echo "<br>";
        echo "O valor de pi em uma CONSTANTE é " . M_PI;

        echo "<br>";
        echo "<br>";

        // Mostrar potencia em função
        echo "Potência em função de 5 e 2 é " . pow(5, 2);

        echo "<br>";
        echo "<br>";

        // Mostrar seno, cosseno e tangente de um angulo
        echo "Seno de 60 é " . sin(60);
        echo "<br>";
        echo "cosseno de 30 é " . cos(30);
        echo "<br>";
        echo "Tangente de 90 é " . tan(90);

        echo "<br>";
        echo "<br>";

        // Radiano para graus e vice verça
        echo "2 em radianos é igual a " . rad2deg(2);
        echo "<br>";
        echo "2 rem graus para radianos é igual a " . deg2rad(2);

        echo "<br>";
        echo "<br>";

        // Função de raiz quadrada de um número
        echo "a raiz quadrada de 4 é " . sqrt(4);
        echo "<br>";
            // Raiz quadrada em potência
            echo "a raiz quadrada de 6 é " . 6 ** (1/2);

            echo "<br>";
            echo "<br>";

        // Raiz cúbica
        echo "A cúbica de 27 é " . 27 ** (1/3);
        ?>
</body>
</html>