<html>
    <head>
        <title> AULA 05 -PHP </title>
    <body>
        <?php
            $n1= 4;
            $n2= $_GET["x"];

            echo "<br><br> Os valores são $n1 e $n2. ";
            echo "<br><br>O valor absoluto de $n1 é " .abs($n1);
            echo "<br><br>O número $n2 <sup> $n1 </sup> é igual a " .pow($n2, $n1);
            echo "<br><br>A raiz quadrada de $n2 é igual a " .sqrt($n2);
            echo "<br><br>o $n2 arredondado é igual a " .round($n1);
            echo "<br><br>o $n2 arredondado para baixo é igual a " .floor($n1);
            echo "<br><br>o $n2 arredondado para cima é igual a " .ceil($n1);

        ?>
    </body>
</html>
