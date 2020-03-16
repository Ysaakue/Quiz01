<?php
  $questao1 = $_POST['questao01'];
  $questao2 = $_POST['questao02'];
  $questao3 = $_POST['questao03'];
  if (isset($_POST['questao04'])) {
    $questao4 = $_POST['questao04'];
  } else {
    $questao4 = array("");
  }
  $pontos = 0;
  $txt1 = "Infelizmente você errou, o item correto era JavaScript";
  if($questao1 == "Js"){
    // echo "ok 1";
    $txt1 = "Parabéns, você acertou a primeira questão, e por isso ganhou 250 pontos";
    $pontos += 250;
  }
  $txt2 = "Infelizmente você errou, a resposta correta era 'break'";
  if(strtolower($questao2) == "break"){
    // echo "ok 2";
    $txt2 = "Parabéns, você acertou a segunda questão, e por isso ganhou 250 pontos";
    $pontos += 250;
  }
  $txt3 = "Infelizmente você errou, a resposta correta era 'Plankalkül'";
  if($questao3 == "Plankalkül"){
    // echo "ok 3";
    $txt3 = "Parabéns, você acertou a terceira questão, e por isso ganhou 250 pontos";
    $pontos += 250;
  }
  $txt4 = "Infelizmente você errou, a resposta correta era itens I e IV";
  if($questao4 == ["I","IV"]){
    // echo "ok 4";
    $txt4 = "Parabéns, você acertou toda a quarta questão, e por isso ganhou 250 pontos";
    $pontos += 250;
  } else {
    $pontos_local = 0;
    if(in_array("I",$questao4)){
      $pontos_local+=50;
    }
    if(!in_array("II",$questao4)){
      $pontos_local+=50;
    }
    if(!in_array("III",$questao4)){
      $pontos_local+=50;
    }
    if(in_array("IV",$questao4)){
      $pontos_local+=50;
    }
    if(!in_array("V",$questao4)){
      $pontos_local+=50;
    }
    if($pontos_local != 0){
      $txt4 = "Parabéns, você acertou parcialmente a quarta questão, e por isso ganhou {$pontos_local} pontos";
      $pontos+=$pontos_local;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/questoes.css">
    <link rel="stylesheet" href="../css/base.css">
    <title>Resultado</title>
  </head>
  <body style="overflow: scroll;">
    <div class="container resultado" style="padding-top:115px;">
      <h1 class="enunciado">Seu Resultado !</h1>
      <h1 class="enunciado"> 1)Marque qual das seguintes linguagens de <br>programação pode ser tanto compilada como interpretada:</h1>
      <li class="lista-itens">
        <label <?php if($questao1 == "PHP"){echo "class='errado'";} ?>> a) PHP</label><br>
        <label <?php if($questao1 == "Java"){echo "class='errado'";} ?>> b) Java</label><br>
        <label <?php if($questao1 == "C++"){echo "class='errado'";} ?>> c) C++</label><br>
        <label <?php if($questao1 == "Python"){echo "class='errado'";} ?>> d) Python</label><br>
        <label class="correto">e) JavaScript</label><br>
        <?php echo "<p class='resultato'>", $txt1, "</p>" ?>
      </li>
      <h1 class="enunciado"> 2) Qual é o comando usado para parar um laço de repetição em C?</h1>
      <li class="lista-itens">
        <?php
          if(strtolower($questao2) != "break"){
            echo '<input type="text" name="questao02" class="item errado" value="', $questao2, '" disable>';
          }
        ?>
        <input type="text" name="questao02" class="item correto" value="break" disable>
        <?php echo "<p class='resultato'>", $txt2, "</p>" ?>
      </li>
      <h1 class="enunciado">3)Dentre as seguintes linguagens de programação, qual a mais antiga?</h1>
      <li class="lista-itens">
        <?php
          if($questao3 != "Plankalkül"){
            echo '<input type="text" name="questao02" class="item errado" value="', $questao3, '" disable>';
          }
        ?>
        <input type="text" name="questao02" class="item correto" value="Plankalkül" disable>
        <?php echo "<p class='resultato'>", $txt3, "</p>" ?>
      </li>
      <h1 class="enunciado">4)Analise os exemplos de criação de array em PHP. Marque os corretos.</h1>
      <li class="lista-itens">
        <label class="correto">I. $idade = array("Paulo"=>32, "Pedro"=>30, "Ana"=>34);</label><br>
        <label <?php if(in_array("II",$questao4)){echo "class='errado'";} ?>>II. $familia = array("Jorge">array("Angela","Iracema", "Bia"),"Pedro">array("Ana"));</label><br>
        <label <?php if(in_array("III",$questao4)){echo "class='errado'";} ?>>III. $nome[0] << "Paulo"; $nome[1] << "Pedro"; $nome[2] << "Ana";</label><br>
        <label class="correto">IV. $idade['Paulo'] = "32"; $idade['Pedro'] = "30"; $idade['Ana'] = "34";</label><br>
        <label <?php if(in_array("V",$questao4)){echo "class='errado'";} ?>>V. $cidades << "Fortaleza" << "São Paulo" << "Caucaia";</label><br>
        <?php echo "<p class='resultato'>", $txt4, "</p>" ?>
      </li>
      <?php echo "<p>Sua pontuação final:", $pontos, "</p>" ?>
      <a href="./pages/q1.php">
        <button>Refazer o Quiz</button>
      </a>
    </div>
  </body>
</html>
