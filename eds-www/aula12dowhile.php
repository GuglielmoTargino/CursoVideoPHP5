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
        $c=$_GET["num"];
        $n=$c;
        $fat=1;
        do{
           $fat=$fat*$c;
           $c--;
        
           
        } while( $c>=1);

        echo "fatorial de $n é $fat";
    
    
    
    
        ?>
        
      

        

        <p><a href="aula12.html" class="botao" > Clique aqui para voltar</a></p>


    </div>

        
</body>
</html>