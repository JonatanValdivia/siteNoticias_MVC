<?php
  Class HomeController extends Controller{
    //Obrigatório ter uma função index
    public function index(){
      //Chamar um model
      // $instanciaModelUsuario = new Usuario;
      // $dados = $instanciaModelUsuario->pegarUsuarios();
      //Chamar uma view
      $this->carregarTemplate('home'/*, $dados*/);
      //Fazer a renderização
    }
  }