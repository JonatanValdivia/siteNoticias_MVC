<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="conteudo">
    <h3>
      <?php echo $this->dados2['titulo'].': '.$this->dados2['descricao'] ; ?>
    </h3>
    <p>
      <?php echo $this->dados2['texto']?>
    </p>
  </div>
</body>
</html>