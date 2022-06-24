<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'solicitacao');
 
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
echo "Sucesso!";
  //Variáveis

  $trabalho1 = null;
  $trabalho2 = null;
  $trabalho3 = null;
  $trabalho4 = null;
  $trabalho5 = null;
  $trabalho6 = null;
  $trabalho7 = null;
  $trabalho8 = null;
 


  // trabalho 1
  if (isset($_POST['trabalho1']))
    $trabalho1 = $_POST['trabalho1'];


  if($trabalho1 !== null){
    $valores1 = implode(",", $trabalho1);
    
    }

  // trabalho2 

  if (isset($_POST['trabalho2']))
    $trabalho2 = $_POST['trabalho2'];

  if($trabalho2 !== null){
    $valores2 = implode(", ", $trabalho2);
  
  
  }

  // trabalho3

  if (isset($_POST['trabalho3']))
    $trabalho3 = $_POST['trabalho3'];

  if($trabalho3 !== null){
    $valores3 = implode(", ", $trabalho3);
  
  }

  // trabalho4

  if (isset($_POST['trabalho4']))
    $trabalho4 = $_POST['trabalho4'];

  if($trabalho4 !== null){
    $valores4 = implode(", ", $trabalho4);
  

  }

    // trabalho5

    if (isset($_POST['trabalho5']))
    $trabalho5 = $_POST['trabalho5'];

  if($trabalho5 !== null){
    $valores5 = implode(", ", $trabalho5);
  
   
  
  }

    // trabalho6

    if (isset($_POST['trabalho6']))
    $trabalho6 = $_POST['trabalho6'];

  if($trabalho6 !== null){
    $valores6 = implode(", ", $trabalho6);
  
   
  
  }

    // trabalho7

  if (isset($_POST['trabalho7']))
    $trabalho7 = $_POST['trabalho7'];

  if($trabalho7 !== null){
    $valores7 = implode(", ", $trabalho7);
  }

    // trabalho8

    if (isset($_POST['trabalho8']))
    $trabalho8 = $_POST['trabalho8'];

  if($trabalho8 !== null){
    $valores8 = implode(", ", $trabalho8);
  }

  // echo gettype($valores1);
  // echo gettype($valores2);


$sql = $conexao->prepare("INSERT INTO solicitacoes (quest1, quest2, quest3, quest4, quest5, quest6, quest7, quest8) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if(!$sql){
  echo "Prepare failed: (". $conexao->errno.") ".$conexao->error."<br>";
};

$sql->bind_param('ssssssss', $valores1, $valores2, $valores3, $valores4, $valores5, $valores6, $valores7, $valores8);
$sql->execute();

echo 'inserido com sucesso';

  // function
  function dd($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    die();
  };

?>
