<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio3</title>
    </head>
    <body>
        <?php
             $n1 = $_GET ["n1"];
        $n2 = $_GET ["n2"];
        $n3 = $_GET ["n3"];
        $n4 = $_GET ["n4"];
        $operacao = $_GET ["operacao"] ; 
       
            if($operacao == "soma"){
               $calculadora = $n1 + $n2 + $n3 + $n4; 
               echo "O resultado é: " .$calculadora ;
            } elseif ($operacao == "subtracao"){
                $calculadora = $n1 - $n2 - $n3 - $n4;
                echo "O resultado é: " .$calculadora ;
            } elseif ($operacao == "divisao"){
                $calculadora = $n1 / $n2 / $n3 / $n4;
                echo "O resultado é: " .$calculadora ;
            }elseif ($operacao == "multiplicacao"){
                $calculadora = $n1 * $n2 * $n3 * $n4;
                echo "O resultado é: " .$calculadora ;
            }

        ?>
    </body>
</html>
