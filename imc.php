<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Resultado do IMC</title>
  </head>
  <body>
    
    <div class="imcform">
      <div class="calc">
      <?php
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $imc = $peso / ($altura * $altura);

        echo('<h1 class="title">Seu IMC é ' . $imc . '</h1> <br>');

        if($imc >= 18.5 && $imc <= 24.9){
          echo('<h1>Você está no peso ideal</h1>');
        }elseif($imc >= 25){
          echo('<h1>Você está acima do peso</h1>');
        }else{
          echo('<h1>Você está abaixo do peso<h1>');
        }
      ?>
  </body>
</html>
