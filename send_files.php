<?php
  include("conexao.php"); 

echo "Sucesso!";


  //Variáveis
  $nomeSolicitante = null;
  $nomeCliente = null;
  $trabalho1 = null;
  $trabalho2 = null;
  $trabalho3 = null;
  $trabalho4 = null;
  $trabalho5 = null;
  $trabalho6 = null;
  $trabalho7 = null;
  $trabalho8 = null;
  $trabalho8 = null;
  $trabalho9 = null;
  $trabalho10 = null;
  $trabalho11 = null;
  $trabalho12 = null;
  $trabalho13 = null;
  $trabalho14 = null;
  $trabalho15 = null;
  $trabalho16 = null;
  $trabalho17 = null;
  $trabalho18 = null;
  $trabalho19 = null;
  $trabalho21 = null;
  $trabalho22 = null;
  $trabalho23 = null;
  $trabalho24 = null;
  $trabalho25 = null;
  $trabalho26 = null;
  $trabalho27 = null;
  $trabalho28 = null;
  $trabalho29 = null;
  $trabalho30 = null;
  $trabalho31 = null;
 

   // nomes 
   if (isset($_POST['nomeSolicitante']))
   $nomeSolicitante = $_POST['nomeSolicitante'];

   if (isset($_POST['nomeCliente']))
   $nomeCliente = $_POST['nomeCliente'];


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

    // trabalho9

    if (isset($_POST['trabalho9']))
    $trabalho9 = $_POST['trabalho9'];

  if($trabalho9 !== null){
    $valores9 = implode(", ", $trabalho9);
  
  
  }

    // trabalho10

    if (isset($_POST['trabalho10']))
    $trabalho10 = $_POST['trabalho10'];

  if($trabalho10 !== null){
    $valores10 = implode(", ", $trabalho10);
  

  
  }

    // trabalho11

    if (isset($_POST['trabalho11']))
    $trabalho11 = $_POST['trabalho11'];

  if($trabalho11 !== null){
    $valores11 = implode(", ", $trabalho11);
  
   
  
  }

    // trabalho12

    if (isset($_POST['trabalho12']))
    $trabalho12 = $_POST['trabalho12'];

  if($trabalho12 !== null){
    $valores12 = implode(", ", $trabalho12);
  
    
  
  }

    // trabalho13

    if (isset($_POST['trabalho13']))
    $trabalho13 = $_POST['trabalho13'];

  if($trabalho13 !== null){
    $valores13 = implode(", ", $trabalho13);
  
   
  
  }

    // trabalho14

    if (isset($_POST['trabalho14']))
    $trabalho14 = $_POST['trabalho14'];

  if($trabalho14 !== null){
    $valores14 = implode(", ", $trabalho14);
  
  
  
  }

    // trabalho15

    if (isset($_POST['trabalho15']))
    $trabalho15 = $_POST['trabalho15'];

  if($trabalho15 !== null){
    $valores15 = implode(", ", $trabalho15);
  
   
  
  }

    // trabalho16

    if (isset($_POST['trabalho16']))
    $trabalho16 = $_POST['trabalho16'];

  if($trabalho16 !== null){
    $valores16 = implode(", ", $trabalho16);
  
   
  
  }

    // trabalho17

    if (isset($_POST['trabalho17']))
    $trabalho17 = $_POST['trabalho17'];

  if($trabalho17 !== null){
    $valores17 = implode(", ", $trabalho17);
  
  
  }

    // trabalho18

    if (isset($_POST['trabalho18']))
    $trabalho18 = $_POST['trabalho18'];

  if($trabalho18 !== null){
    $valores18 = implode(", ", $trabalho18);
  
  
  
  }

    // trabalho19

    if (isset($_POST['trabalho19']))
    $trabalho19 = $_POST['trabalho19'];

  if($trabalho19 !== null){
    $valores19 = implode(", ", $trabalho19);
  
 
  
  }

    // trabalho20

    if (isset($_POST['trabalho20']))
    $trabalho20 = $_POST['trabalho20'];

  if($trabalho20 !== null){
    $valores20 = implode(", ", $trabalho20);
  
   
  
  }

    // trabalho21

    if (isset($_POST['trabalho21']))
    $trabalho21 = $_POST['trabalho21'];

  if($trabalho21 !== null){
    $valores21 = implode(", ", $trabalho21);
  
 
  
  }

    // trabalho22

    if (isset($_POST['trabalho22']))
    $trabalho22 = $_POST['trabalho22'];

  if($trabalho22 !== null){
    $valores22 = implode(", ", $trabalho22);
  
 
  
  }

    // trabalho23

    if (isset($_POST['trabalho23']))
    $trabalho23 = $_POST['trabalho23'];

  if($trabalho23 !== null){
    $valores23 = implode(", ", $trabalho23);
  
  
  
  }

    // trabalho24

    if (isset($_POST['trabalho24']))
    $trabalho24 = $_POST['trabalho24'];

  if($trabalho24 !== null){
    $valores24 = implode(", ", $trabalho24);
  

  
  }

    // trabalho25

    if (isset($_POST['trabalho25']))
    $trabalho25 = $_POST['trabalho25'];

  if($trabalho25 !== null){
    $valores25 = implode(", ", $trabalho25);
  

  }

    // trabalho26

    if (isset($_POST['trabalho26']))
    $trabalho26 = $_POST['trabalho26'];

  if($trabalho26 !== null){
    $valores26 = implode(", ", $trabalho26);
  

  
  }

    // trabalho27

    if (isset($_POST['trabalho27']))
    $trabalho27 = $_POST['trabalho27'];

  if($trabalho27 !== null){
    $valores27 = implode(", ", $trabalho27);
  
  
  }

    // trabalho28

    if (isset($_POST['trabalho28']))
    $trabalho28 = $_POST['trabalho28'];

  if($trabalho28 !== null){
    $valores28 = implode(", ", $trabalho28);
  
 
  
  }
  
    // trabalho29

    if (isset($_POST['trabalho29']))
    $trabalho29 = $_POST['trabalho29'];

  if($trabalho29 !== null){
    $valores29 = implode(", ", $trabalho29);

  
  }

  // trabalho30

  if (isset($_POST['trabalho30']))
  $trabalho30 = $_POST['trabalho30'];

if($trabalho30 !== null){
  $valores30 = implode(", ", $trabalho30);



  // trabalho31

  if (isset($_POST['trabalho31']))
  $trabalho31 = $_POST['trabalho31'];

if($trabalho31 !== null){
  $valores31 = implode(", ", $trabalho31);





  //observações 

  //obs1
  if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs2
  if (isset($_POST['obs2']))
  $observacao2 = $_POST['obs2'];

    //obs3
    if (isset($_POST['obs3']))
    $observacao3 = $_POST['obs3'];

      //obs4
  if (isset($_POST['obs4']))
  $observacao4 = $_POST['obs4'];

    //obs5
    if (isset($_POST['obs5']))
    $observacao5 = $_POST['obs5'];

      //obs6
  if (isset($_POST['obs6']))
  $observacao6 = $_POST['obs6'];

    //obs7
    if (isset($_POST['obs7']))
    $observacao7 = $_POST['obs7'];

      //obs8
  if (isset($_POST['obs8']))
  $observacao8 = $_POST['obs8'];

    //obs8
    if (isset($_POST['obs8']))
    $observacao8 = $_POST['obs8'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];

    //obs1
    if (isset($_POST['obs1']))
    $observacao1 = $_POST['obs1'];

      //obs1
  if (isset($_POST['obs1']))
  $observacao1 = $_POST['obs1'];





  // echo gettype($valores1);
  // echo gettype($valores2);


$sql = $conexao->prepare("INSERT INTO Solicitacao (nomeSolicitante, nomeCliente, itemUm,
itemDois,
itemTres,
itemQuatro,
itemCinco,
itemSeis,
itemSete,
itemOito,
itemNove,
itemDez,
itemOnze,
itemDoze,
itemTreze,
itemQuatorze,
itemQuinze,
itemDezesseis,
itemDezessete,
itemDezoito,
itemDezenove,
itemVinte,
itemVinteUm,
itemVinteDois,
itemVinteTres,
itemVinteQuatro,
itemVinteCinco,
itemVinteSeis,
itemVinteSete,
itemVinteOito,
itemVinteNove,
itemTrinta,
itemTrintaUm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if(!$sql){
  echo "Prepare failed: (". $conexao->errno.") ".$conexao->error."<br>";
};

$sql->bind_param('sssssssssssssssssssssssssssssssss', $nomeSolicitante, $nomeCliente, $valores1, $valores2, $valores3, $valores4, $valores5, $valores6, $valores7, $valores8, $valores9, $valores10, $valores11, $valores12, $valores13, $valores14, $valores15, $valores16, $valores17, $valores18, $valores19, $valores20, $valores21, $valores22, $valores23, $valores24, $valores25, $valores26, $valores27, $valores28, $valores29, $valores30, $valores31);
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
