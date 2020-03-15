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
<body>
  <?php
    $questao1 = $_POST['questao01'];
    $questao2 = $_POST['questao02'];
    $questao3 = $_POST['questao03'];
    $questao4 = $_POST['questao04'];
    echo $questao1, '<br>';
    echo $questao2, '<br>';
    echo $questao3, '<br>';
    foreach($questao4 as $item) {
      echo $item, '<br>';
    }
  ?>
  
</body>
</html>
