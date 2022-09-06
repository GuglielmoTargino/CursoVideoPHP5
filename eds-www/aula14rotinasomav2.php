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
         
            function soma (){
                $a=func_get_args();
                $t=func_num_args();
                $s=1;

                for($i=0;$i<$t;$i++){
                    $s=$s+$a[$i];

                }        
                return $s;              
                
            }
           
            $resu=soma(5,6,8);
            echo "resulado é $resu";
           
        ?>
        
      

        

        <p><a href="aula14.html" class="botao" > Clique aqui para voltar</a></p>


    </div>

        
</body>
</html>