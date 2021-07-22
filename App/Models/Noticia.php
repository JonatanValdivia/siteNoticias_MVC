<?php
require_once 'Conexao.php';
//Usamos o require aqui pois o autoload.php apenas funciona quando há um new, ou seja, uma instância. Diferente disso, deve-se ter o require mesmo
Class Noticia{
  private $con;

  public function __construct(){
    $this->con = Conexao::getConexao();
    //Sempre que feito a instância do model/Notícias, já faz a conexão com o banco de dados.
  }

  public function getNoticias(){
    $dados = array();
    $cmd = $this->con->query('SELECT n.id,
                                     n.titulo, 
                                     n.nome_imagem, 
                                     n.texto,
                                     tn.descricao  
                                     from noticias n
                                     inner join tipo_noticias tn on n.fk_id_tipoNoticia = tn.id_tipo');
    $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);//Retorna apenas as formas de chaves escritas ou invés de números
    return $dados;
  }

  public function procurarPorId($id){
    $dados = array();
    $cmd = $this->con->prepare("SELECT n.*, tn.descricao from noticias n
    inner join tipo_noticias tn on n.fk_id_tipoNoticia = tn.id_tipo where n.id = :id;");
    $cmd->bindValue(':id', $id);
    $cmd->execute();
    $dados = $cmd->fetch();
    return $dados;
  } 
}