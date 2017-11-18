<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            /*$cor = "amarelo";
            $cor = "vermelho";
            echo $cor;*/
      
            /*$cor = "amarelo";
      
            var_dump($cor);*/
      
            /*$a = 3;
            $b = 5;
      
            $resultado = $a + $b;
      
            $resultado = $a - $b;
      
            echo $resultado;*/
      
            /*$a = 2;
            $b = 4;
      
            if($a > $b) {
                echo "a é maior que b";
            } else if($a == $b) {
                echo "a é igual a b";
            } else {
              echo "a é menor que b";
            }*/
      
            /*$i = 1;
      
            while($i < 10) {
                $i = $i + 1;
                echo $i . "<br>";
            }*/
      
            /*$i = 1;
      
            while($i < 10) {
              $i = $i + 1;
              
              if($i%2 == 0) {
                echo "O valor de $i é par<br>";
              } else {
                echo "O valor de $i é ímpar<br>";
              }
            }*/
      
            /*for($i = 1; $i <= 10; $i++) {
              echo "O valor de i é: $i<br>";
            }*/
      
            /*$nome = "Felipe";
      
            switch ($nome) {
              case "Ana":
                echo "olá Ana";
                break;
                
              case "Pedro":
                echo "olá Pedro";
                break;
                
              default:
                echo "Não sei quem você é.";
            }*/
      
            /*function soma($a, $b) {
              $resultado = $a + $b;
              return $resultado;
            }
      
            $numero1 = 23;
            $numero2 = 20;
      
            $resultadoFuncao = soma($numero1, $numero2);
      
            echo $resultadoFuncao;*/
      
            /*$cores = ["vermelho", "azul"];
            echo $cores[4];*/
      
            /*$pessoa = ["nome" => "Ana", "idade" => 23];
            echo $pessoa["idade"];*/
      
            /*$frutas = array("maçã", "laranja", "morango");  
      
            foreach($frutas as $fruta) {
                echo "A fruta é $fruta<br>";
            }*/
      
            $comidas = array("batata frita", "macarrão");
      
            foreach($comidas as $comida){
              echo "$comida<br>";
            }
      
            array_push($comidas, "Sopa de cebola");
      
            foreach($comidas as $comida){
              echo "$comida<br>";
            }
      
            array_pop($comidas);
      
            foreach($comidas as $comida){
              echo "$comida<br>";
            }

        ?>

    </body>
</html>