<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/CSS/styleNoticias.css">
  <link rel="stylesheet" href="public/CSS/styleConteudo.css">
  <title>Document</title>
</head>
<body>
  <!-- CABEÇALHO -->
  <?php
  //E aqui são renderizado os dados dentro da view
    $this->carregarViewNoTemplate($nomeView, $dadosModel);
  ?>
  <!-- RODAPÉ -->
</body>
</html>