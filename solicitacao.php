<?php include("conexao.php"); ?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Solicitação</title>
  <!-- CSS only -->
  <link rel="icon" href="/assets/img/img_logo.jfif" type="imagem/gif">
  <link rel="stylesheet" href="assets/styles/style_solicitacao.css">  

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



  <script>
    function text(x) {
  
      if (x == 0) document.getElementById("group").style.display = "flex";
      else document.getElementById("group").style.display = "none";
    return;
}
  </script>
  
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.moorebrasil.com.br/escritorios/ribeirao-preto---sp" target="_blank">
        <img src="assets/img/img_logo.jfif" class="img" width="35" height="35" alt="" right="700px"> Moore Prisma
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home_page_users.php" target="_blank">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contato.html" target="_blank">Contato/Ajuda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="https://www.moorebrasil.com.br/escritorios/ribeirao-preto---sp" target="_blank">Sobre nós</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="box">
    <form action="send_files.php" method="POST">
      <label for="exampleDataList" class="form-label">Nome do Solicitante:</label>
      <select class="form-select" name="nomeSolicitante" aria-label="Default select example">
        <option selected disable>Selecione o nome do solicitante</option>

        <?php
  
        $sql = mysqli_query($conexao, "SELECT USUARIO from table_name where id >= 1");
        while($row = mysqli_fetch_assoc($sql)){
          echo "<option>".$row['USUARIO']."</option>";
        }
        ?>

      </select>

      <br>
      <label for="exampleDataList" class="form-label">Nome do Cliente:</label>
      <input class="form-control" list="datalistOptions1" id="exampleDataList" placeholder="Selecione">
      <datalist name="nomeCliente" id="datalistOptions1">
        <?php
  
          $sql = mysqli_query($conexao, "SELECT USUARIO from table_name where id >= 1");
          while($row = mysqli_fetch_assoc($sql)){
            echo "<option>".$row['USUARIO']."</option>";
          }
        ?>
      </datalist>
      <br>
     
      <label for="form-check form-check-inline" class="form-label">Empresa do grupo:</label><br>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="example" value="sim" onclick="text(0)" checked />
        <label class="form-check-label" for="show">Sim</label>
      </div>

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="example" value="não" onclick="text(1)" />
        <label class="form-check-label" for="hide">Não</label>
      </div>
      <br>
    
      <div class="input-group input-group-sm mb-3" id="group">
        <input type="text" placeholder="Digite aqui" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
      </div>

    
    

      <br>

      <fieldset>
        <legend><small>1. Abrir CW</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho1[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  value="Controle interno" >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho1[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho1[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho1[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>

        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs1">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>2. Teste de saldo inicial</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho2[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  value="Controle interno" >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho2[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho2[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho2[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>

        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs2">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>3. Mapear ou importar balancete do ano anterior</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho3[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho3[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho3[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho3[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox4">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs3">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>4. Consulta no World Check</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho4[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho4[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho4[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho4[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs4">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>5. Balancete comparativo</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho5[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho5[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho5[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho5[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs5">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>6. BL e DRE</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho6[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho6[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho6[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho6[]" type="checkbox" id="inlineCheckbox4" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox4">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs6">
      </fieldset>

      <br>
      value="Controle interno"
      <fieldset>
        <legend><small>7. Questionário de T.I</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho7[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho7[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho7[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho7[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs7">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>8. Contas a receber (aging-list, AVP, segregação entre circulante e não circulante e
            PCLD)</small>
        </legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho8[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho8[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho8[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho8[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs8">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>9. Registro de inventário</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho9[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho9[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho9[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho9[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs9">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>9.1 Teste de realização de estoque</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho10[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho10[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs10">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>10. Adiantamento a fornecedores(aging-list, AVP, segregação entre circulante e não
            circulante)</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho11[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho11[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho11[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho11[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs11">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>11. Mapa de movimentação do imobilizado</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho12[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho12[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho12[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho12[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs12">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>11.1 Seleção do teste de adição e baixa do imobilizado</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho13[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho13[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho13[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho13[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs13">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>11.2 Verificar os documentos da seleção do teste de adição e baixa de imobilizado</small>
        </legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho14[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho14[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho14[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho14[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs14">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>11.3 Teste de depreciação</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho15[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho15[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho15[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho15[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs15">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>12. Fornecedores ( aging-list, AVP, segregação entre circulante e não circulante)</small>
        </legend>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho16[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho16[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho16[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho16[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs16">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>13. Adiantamento de clientes (aging-list, AVP, segregação entre circulante e não
            circulante)</small>
        </legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho17[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho17[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho17[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho17[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs17">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>14. Comparativo Receita de vendas X SPED fiscal</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho18[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho18[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho18[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho18[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs18">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>15. Comparativo de despesa de ICMS X SPED fiscal</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho19[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho19[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho19[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho19[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs19">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>16. Comparativo de despesa de PIS e COFINS X Recibo dos Speds contribuições</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho20[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho20[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho20[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho20[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações"name="obs20">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>17. Comparativo Receita de serviço X Livro de prestação de serviços</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho21[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho21[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho21[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho21[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações"name="obs21">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>18. Comparativo de despesa de ISS X Livro de prestação de serviços</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho22[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho22[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho22[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho22[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs22">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>19. Revisão analítica do resultado/gráfico por área</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho23[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho23[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho23[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho23[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs23">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>20. Receita bruta - Fazer checagem individual entre os lançamentos da notas fiscais no razão
            contábil com os speds (Só é possível realizar a checagem se o razão do cliente possuir a informação do
            número da nota fiscal e for tabulado corretamente para extrair a informação).</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho24[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho24[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho24[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho24[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs24">
      </fieldset>
      <br>




      <legend><small><u><strong>Para os itens abaixo, informar se algum grupo não será validado através do teste de
              voucher:</strong></u></small></legend><br><br>

      <fieldset>
        <legend><small>21. Seleção do teste das Receita Líquida das Atividades Operacionais - selecionar com base nos
            speds ou nos razões?</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho25[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho25[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho25[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho25[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs25">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>22. Seleção do teste de Custo das Atividades Operacionais.</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho26[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho26[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho26[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho26[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs26">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>23. Seleção do teste das Despesas Comerciais.</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho27[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho27[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho27[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho27[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs27">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>24. Seleção do teste das Despesas Gerais e Administrativas.</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho28[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho28[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho28[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho28[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs28">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>25. Seleção do teste de Receitas e Despesas Financeiras.</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho29[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho29[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho29[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho29[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs29">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>26. Verificar os documentos da seleção dos testes de despesas e receitas</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho30[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho30[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho30[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho30[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Observações" name="obs30">
      </fieldset>
      <br>

      <fieldset>
        <legend><small>27. Outro WP</small></legend><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho31[]" type="checkbox" id="inlineCheckbox1" value="Controle interno"  >
          <label class="form-check-label" for="inlineCheckbox1">Controle interno</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho31[]" type="checkbox" id="inlineCheckbox2" value="Preliminar">
          <label class="form-check-label" for="inlineCheckbox2">Preliminar</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho31[]" type="checkbox" id="inlineCheckbox3" value="Final">
          <label class="form-check-label" for="inlineCheckbox3">Final</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="trabalho31[]" type="checkbox" id="inlineCheckbox3" value="Nenhum">
          <label class="form-check-label" for="inlineCheckbox3">Nenhum</label>
        </div>
        <br><br>
        <input class="form-control form-control-sm" type="text" placeholder="Especificar" name="obs31">
      </fieldset>
      <br>


      






      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>

</html>