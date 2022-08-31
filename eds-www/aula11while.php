<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>Aula1_Teste_PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

  
  

</head>





<body>
    <div>
        <h1>Tô chegando! Mundo! Olá PHP!</h1>
        <h2>Meus primeiros passos em PHP</h2>

    <form method="get" action="aula11while.php">

        <?php
        $n=1;

            while ($n<=5){
                $n++;

           echo " valor $n: <input type='number' name='v1' id='1'/>";

            }

            /* 

            $n=5;

            while($n<8){
                $++;

                echo " $n";

            }
            
            
            */

        ?>
                
    </form>
      

        

        <br/><a href="aula11.html"> Clique aqui para voltar</a>


    </div>

        
</body>
</html>