<?php

class NoticiasController extends Controller{
  public function index(){
    /*Pegamos os dados que vem do banco, através do model, e através do controller, passamos para a view*/
    $noticiaModel = new Noticia;
    $dados = $noticiaModel->getNoticias();
    // echo '<pre>';
    // print_r($dados);
    // echo '</pre><br>';
    //Como os dados são retornados: 
    /*[id] => 1
      [0] => 1
      [titulo] => Noticia 1
      [1] => Noticia 1 (...)*/
    // exit;
    //Passamos esses dados dentro da função carregarTemplate, que será renderizado no carregarViewNoTemplate()
    $this->carregarTemplate('noticias', array(), $dados);
  }

  public function entreterimento($id_noticia){
    $noticiaModel = new Noticia;
    $dados = $noticiaModel->procurarPorId($id_noticia);
    // print_r($dados);
    // exit;
    $this->carregarTemplate('entreterimento', array(), $dados);
  }

  public function futebol($id_noticia){
    $dados = array();
    $noticiasModel = new Noticia;
    $dados = $noticiasModel->procurarPorId($id_noticia);
    // print_r($dados);
    $this->carregarTemplate('futebol', array(),  $dados);
  }
}