<?php include("conexao.php"); 
$sqlQuery = "SELECT CodSolicitacao, nome, itemUm, itemDois, itemTres, itemQuatro, itemCinco FROM Solicitacao LIMIT 5";
$resultSet = mysqli_query($conexao, $sqlQuery) or die("database error:". mysqli_error($conexao));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/styles/style_solicitacao.css">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="box">
        <table id="editableTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Trabalho</th>
                    <th>Resposta</th>
                  													
                </tr>
            </thead>
            <tbody>
                <?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
                <tr id="<?php echo $developer ['CodSolicitacao']; ?>">
                <td><?php echo $developer ['CodSolicitacao']; ?></td>
                <td><?php echo $developer ['nome']; ?></td>
            		   				   				  
                </tr>
                <?php } ?>
            </tbody>
    </div>
</table>
</body>
</html>