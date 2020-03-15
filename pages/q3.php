<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/questoes.css">
  <link rel="stylesheet" href="../css/base.css">
  <title>Questão 3</title>
</head>
<body>
  <div id="questao1" class="questao">
    <form action="./q4.php" method="post" id="q3">
      <div class="container">
        <h1 class="enunciado">3)Dentre as seguintes linguagens de programação, qual a mais antiga?</h1>
        <li class="lista-itens">
        <select id="cars" name="questao03" form="q3">
          <option value="Java">Java</option>
          <option value="C">C</option>
          <option value="C++">C++</option>
          <option value="PLANKALKÜL">PLANKALKÜL</option>
          <option value="Python">Python</option>
          <option value="C#">C#</option>
          <option value="JavaScript">JavaScript</option>
          <option value="Visual Basic .NET">Visual Basic .NET</option>
          <option value="Ruby">Ruby</option>
          <option value="PHP">PHP</option>
          <option value="ALGOL 58">ALGOL 58</option>
          <option value="MATLAB">MATLAB</option>
          <option value="Swift">Swift</option>
          <option value="Objective-C">Objective-C</option>
          <option value="Assembly">Assembly</option>
          <option value="Perl">Perl</option>
          <option value="Delphi">Delphi</option>
          <option value="Go">Go</option>
          <option value="Scratch">Scratch</option>
          <option value="SQL">SQL</option>
          <option value="Pascal">Pascal</option>
          <option value="Visual Basic">Visual Basic</option>
        </select>
          <input type="hidden" name="questao01" value=<?php echo  $_POST['questao01'] ?> >
          <input type="hidden" name="questao02" value=<?php echo  $_POST['questao02'] ?> >
        </li>
        <input type="submit" value="PRÓXIMA">
      </div>
    </form>
  </div>
</body>
</html>
