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
    $num=45;
    $nome="Guglielmo_Targino";
    
     echo  $nome." tem  ". $num." anos!";

    $num1=$_GET["a"];
    $num2=$_GET["b"];
   
    echo "<br/> voce digitou $num1 e $num2";

      
    echo "<br/> volor absoluto de $num2 e ". abs($num2); 
    echo "<br/> a potencia de $num1<sup> $num2</sup> e ". pow($num1,$num2);
    echo "<br/> a raiz quadrada de $num1 e ". sqrt($num1);
    echo "<br/> o valor arredondado de $num2 e ". round($num2);
    echo "<br/> a parte inteira de $num2 e  ". intval($num2);
    echo " <br/> O valor de $num2 em reais e R$". number_format($num2,2,',','.');

    ?>



</div>

        
</body>







</html>
