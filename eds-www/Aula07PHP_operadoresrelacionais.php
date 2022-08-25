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
    $n1=$_GET["a"];
    $n2=$_GET["b"];
    $oper=$_GET["op"];
    $resu=($oper==1)?$n1+$n2:$n1*$n2;
    echo "Resultado igual a $resu <br/>";

    $not1=$_GET["c"];
    $not2=$_GET["d"];
    $m=($not1+$not2)/2; 
    $sit=($m>=6)?"aprovado":"reprovado";   
    echo "media igual a $m <br/>";
    echo "situação e $sit";

    $ano=$_GET["an"];
    $ida=2022-$ano;
    $vot=($ida>16 && $ida<65)?"deve votar":"isento";
    echo " o eleitor $vot";
    

    ?>



</div>

        
</body>







</html>
