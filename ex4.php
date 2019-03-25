<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio4</title>
    </head>
    <body>
        <a href="form.php?prontuario=id">
                        
        </a>
        <?php
             $prontuario = $_GET ["id"];
        
        if ($prontuario == 1) {
            
            echo "Nome = José Augusto Prontuario = 1235891";
            
        } elseif ($prontuario == 2) {
                
            echo "Nome = Joaquim da Silva Prontuario = 3698521";
            
            } elseif ($prontuario== 3) {
                
                echo "Nome = João da Silva Pereira Prontuario = 7412589";
                 
            } elseif ($prontuario == 4) { 
                
               echo "Nome = Matheus Oliveira Prontuario = 9632471";
            }
           

        ?>
    </body>
</html>
