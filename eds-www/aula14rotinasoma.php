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

        <?php
         
            function soma ($a,$b){
                $s=$a+$b;
                return $s;              
                
            }
           
            $x=9;
            $y=4;

            $re=soma($x,$y);
            echo "resulado é $re";
           
        ?>
        
      

        

        <p><a href="aula14.html" class="botao" > Clique aqui para voltar</a></p>


    </div>

        
</body>
</html>