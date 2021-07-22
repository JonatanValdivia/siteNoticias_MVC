<?php

Class Conexao{

  private static $instancia;


  private function __construct(){
    
  }

  public static function getConexao(){
    if(!isset(self::$instancia)){
      $dbName = 'aulas_mvc';
      $host = 'localhost';
      $user = 'root';
      $senha = 'bcd127';
    }
    try{
      self::$instancia = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $senha);
    }catch(Exception $e){
      echo 'Erro: '. $e;
    }
    return self::$instancia;
  }
}