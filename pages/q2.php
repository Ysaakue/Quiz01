<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/questoes.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Questão 2</title>
  </head>
  <body>
    <div id="questao1" class="questao">
      <form action="./q3.php" method="post">
        <div class="container">
          <h1 class="enunciado"> 2) Qual é o comando usado para parar um laço de repetição em C?</h1>
          <li class="lista-itens">
            <input type="text" name="questao02" class="item" id="input-text-q2">
            <input type="hidden" name="questao01" value=<?php echo  $_POST['questao01'] ?> >
          </li>
          <input type="submit" value="PRÓXIMA" id="submit02">
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/validacao.js"></script>
  </body>
</html>
