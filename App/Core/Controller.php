<?php
//Todos os controllers herdam/são uma extensão desse Controller, chamado de Controller PAI
Class Controller{
  public $dados; //Dados pegos do model para serem passados para a view
  public $dados2;

  public function __construct(){
    $this->dados = array();
  }

  public function carregarTemplate($nomeView, $dadosModel = array(), $dados2 = array()){
    //Pegamos a $nomeView e passamos para a outra função, assim como o model. E no tamplate.php, chamamos a função com os próprios parâmetros, pois ela já armazena as valores
    $this->dados = $dadosModel;
    $this->dados2 = $dados2;
    require 'Views/template.php';
  }

  public function carregarViewNoTemplate($nomeView, $dadosModel = array()){
    //Esse extract() faz, exemplo: 
    /*['nome'] = 'Miriam;
    ['ano'] = '1999;
    Pega as chaves de arrays e transforma em variáveis:
    $nome = 'Miriam';
    $ano = '1999;
    Isso serve para priorizar a parte visual*/
    extract($dadosModel);
    require 'Views/'.$nomeView.'.php';
  }
  
}

