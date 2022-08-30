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
        $n=isset($_GET["num"])?$_GET["num"]:"0";
        $op=isset($_GET["oper"])?$_GET["oper"]:"1";

        switch($op){
            case 1:
                $r=$n*2;
                break;        

            case 2:
                $r=$n^3;
                break;

            case 3:
            
            $r=sqrt($n);
            break;

            }

            echo " o resultado é $r";

        ?>
                

      

        

        <a href="_modelohtml10.html"> Clique aqui para voltar</a>


    </div>

        
</body>
</html>