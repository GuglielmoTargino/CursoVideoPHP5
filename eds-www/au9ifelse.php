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
        $a=isset($_GET["ano"])?$_GET["ano"]: invalido;
        $i=2022-$a;
        $inf;

        
        if($i<16){

            $inf="não pode dirigir muito menos votar";
        }

        else{
            if($i>=16 && $i<18){            

            $inf="só pode votar";
        }

        else{

            if($i<65){
                $inf=" pode dirigir e deve votar";
            }
            else{

            
                $inf=" pode digir, e votar é opcional";
                }
        }

        }






        echo " voce tem $i   $inf<br/>";

        ?>
                

      

        

        <a href="_modelohtml9.html"> Clique aqui para voltar</a>


    </div>

        
</body>
</html>