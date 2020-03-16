<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/questoes.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Questão 1</title>
  </head>
  <body>
    <div id="questao1" class="questao">
      <form action="./q2.php" method="post">
        <div class="container">
          <h1 class="enunciado"> 1)Marque qual das seguintes linguagens de <br>programação pode ser tanto compilada como interpretada:</h1>
          <li class="lista-itens">
            <input type="radio" value="PHP" name="questao01" class="item"> a) PHP<br>
            <input type="radio" value="Java" name="questao01" class="item"> b) Java<br>
            <input type="radio" value="C++" name="questao01" class="item"> c) C++<br>
            <input type="radio" value="Python" name="questao01" class="item"> d) Python<br>
            <input type="radio" value="Js" name="questao01" class="item"> e) JavaScript<br>
          </li>
          <input type="submit" value="PRÓXIMA" id="submit01">
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/validacao.js"></script>
  </body>
</html>
