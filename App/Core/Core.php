<?php
//Sempre que temos uma classe podemos fazer a instância dela para acessar os seus métodos ou variáveis. Quando fazemos a instância, podemos usar um construtor -> ativado automaticamente quando feito a instância da classe.
Class Core{

  public function __construct(){
    $this->run(); //Para chamar a função de escopo global, ou para este bloco enxergar a mesma.
  }

  public function run(){
    $param = array();
    //Quando feito a instancia do construtor em algum lugar, esta mensagem será renderizada.
    //echo "Oi oi";

    //No htaccess -> temos após o "?" está variável que recebe $1;
      //Se $_GET['pag'] está setado, então fazemos:
    if(isset($_GET['pag'])){
      //com que $url recebe esta variável pré-definida
      $url = $_GET['pag'];
    }
    //E se a variável $url não está vazia (ou seja, se o if acima for verdadeiro, então ela recebe alguma coisa), então fazemos:
    if(!empty($url)){
      //Separamos o que é classe, função e parâmetro, através da função explode do php. 
      $url = explode('/', $url);
      // print_r($url);
      //[0] => classe [1] => metodo [2] => param 
      $controller = $url[0] . 'Controller'; //classe
      array_shift($url); //Retira a primeira posição do array (nesse caso, o zero); Assim, podemos sempre utilizar a posição zero.
      if(isset($url[0]) && !empty($url[0])){
        $method = $url[0];
        array_shift($url);
      }else{ //mandou somente a classe sem método
        $method = 'index'; //O padrão será index
      }
      if(count($url) > 0){
        $param = $url; //$param recebe o restante da url, que no caso agora é um array
      }
      
      // echo "<pre>";
      // print_r($controller);
      // echo "</pre><br>";
      // echo "<pre>";
      // print_r($method);
      // echo "</pre><br>";
      // echo "<pre>";
      // print_r($param);
      // echo "</pre><br>";

    }else{//senão houver uma classe passada na url, então usaremos uma padrão:
      $controller = "HomeController";
      $method = 'index';
      // echo $controller . "<br>";
      // echo $method . "<br>";
    }
    $caminho = 'App/Controllers/' . $controller . '.php';
    if(!file_exists($caminho) && !method_exists($controller, $method)){
      $controller = "HomeController";
      $method = 'index';
    }
    //Apóa todas essas validações, nós instanciamos a variável controller (cuja pode receber: "home", "about", "more"..., de acordo com o processo acima).
    $instanciaController = new $controller; //Quando passado esse "new", logo a função que está no arquivo "autoload.php" já pega isso e faz o require
    
    call_user_func_array(array($instanciaController, $method), $param); //starta o método, (no caso, o padrão é o index, mas poderia ser outro: store, delete...).
  }

}