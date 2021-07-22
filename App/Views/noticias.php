Página principal de notícias<br>

<div class="noticias">
<?php
  for($i = 0; $i < count($this->dados2); $i++){
?>
  <a href="<?php echo '?pag=noticias/'.$this->dados2[$i]['descricao'].'/'.$this->dados2[$i]['id']?>">
    <div>
      <img src="<?php echo 'Midia/'.$this->dados2[$i]['nome_imagem'];?>" alt="">
      <h3><?php echo $this->dados2[$i]['titulo'];?></h3>
    </div>
  </a>
<?php
  }
?>
</div>
<?php
  print_r($this->dados2[0]['titulo']);
?>