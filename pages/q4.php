<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/questoes.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Questão 4</title>
  </head>
  <body>
    <div id="questao1" class="questao">
      <form action="./resultado.php" method="post">
        <div class="container">
          <h1 class="enunciado">4)Analise os exemplos de criação de array em PHP. Marque os corretos.</h1>
          <li class="lista-itens">
            <input type="checkbox" name="questao04[]" value="I">
            <label for="questao04[]">I. $idade = array("Paulo"=>32, "Pedro"=>30, "Ana"=>34);</label><br>
            <input type="checkbox" name="questao04[]" value="II">
            <label for="questao04[]">II. $familia = array("Jorge">array("Angela","Iracema", "Bia"),"Pedro">array("Ana"));</label><br>
            <input type="checkbox" name="questao04[]" value="III">
            <label for="questao04[]">III. $nome[0] << "Paulo"; $nome[1] << "Pedro"; $nome[2] << "Ana";</label><br>
            <input type="checkbox" name="questao04[]" value="IV">
            <label for="questao04[]">IV. $idade['Paulo'] = "32"; $idade['Pedro'] = "30"; $idade['Ana'] = "34";</label><br>
            <input type="checkbox" name="questao04[]" value="V">
            <label for="questao04[]">V. $cidades << "Fortaleza" << "São Paulo" << "Caucaia";</label><br>

            <input type="hidden" name="questao01" value="<?php echo  $_POST['questao01'] ?>" >
            <input type="hidden" name="questao02" value="<?php echo  $_POST['questao02'] ?>" >
            <input type="hidden" name="questao03" value="<?php echo  $_POST['questao03'] ?>" >
          </li>
          <input type="submit" value="PRÓXIMA" id="submit04">
        </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/validacao.js"></script>
  </body>
</html>
