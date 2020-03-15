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
        <h1 class="enunciado"> 2) Qual é o nome do comando para parar um laço de repetição?</h1>
        <li class="lista-itens">
          <input type="text" name="questao02" class="item">
          <input type="hidden" name="questao01" value=<?php echo  $_POST['questao01'] ?> >
        </li>
        <input type="submit" value="PRÓXIMA">
      </div>
    </form>
  </div>
</body>
</html>