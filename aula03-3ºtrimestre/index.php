<html>
    <head>
        <title>Aula 03 - PHP</title>
    </head> 
        <body>
            <?php
            $nome1 = "Arthur";
            $nome2 = "Vitória";
            
            $num1=10;
            $num2=2;

            $soma=$num1+$num2;

            echo "Meu Nome é ".$nome2 ." e minha dupla é " .$nome1; 
            echo "<br>Meu Nome é $nome2 e minha dupla é $nome1";

            echo "<br><br>A soma de $num1 + $num2 é igual a $soma. ";

            echo "<br><br>A subtração dos numeros $num1 e $num2 é igual a: ".($num1-$num2).".";
            echo "<br> A multiplicação dos números $num1 e $num2 é igual a: ". ($num1*$num2).".";
            echo "<br> A divisão real dos números $num1 e $num2 é igual a: ". ($num1/$num2).".";
            echo "<br> O resto da divisão dos núemros $num1 e $num2 é igual a: ". ($num1%$num2)."."

            ?>
        </body> 
</html>
