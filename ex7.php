<?php
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$not1 = isset($_POST['not1']) ? $_POST['not1'] : "";
$not2 = isset($_POST['not2']) ? $_POST['not2'] : "";
$not3 = isset($_POST['not3']) ? $_POST['not3'] : "";
$not4 = isset($_POST['not4']) ? $_POST['not4'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Calculadora de média</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Ler o nome de um aluno e quatro valores referentes as suas notas bimestrais, calcular a média aritmética, e exibir uma mensagem informando se o aluno
    foi aprovado se o valor da média escolar for maior ou igual 7. Se o valor da média for menor que 7, solicitar a nota de exame e recalcular a média. Se a
    nova média for maior ou igual a 5, exibir uma mensagem informando que o aluno foi aprovado em exame. Se o aluno não for aprovado informar essa condição.
    Apresentar com as mensagens o nome do aluno e o valor da média, para qualquer condição. -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <nav class="navbar" style="background-color: #212529;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://cdn-icons-png.flaticon.com/512/5968/5968332.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Exercícios - PHP
      </a>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Calculadora de Média</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input value="<?= $nome ?>" class="form-control" type="text" name="nome" id="nome" placeholder="Ex: Rodolfo" required>
              </div>
              <div class="form-group">
                <label for="not1">Nota 1:</label>
                <input value="<?= $not1 ?>" class="form-control" type="double" step="any" name="not1" id="not1" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not2">Nota 2:</label>
                <input value="<?= $not2 ?>" class="form-control" type="double" step="any" name="not2" id="not2" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not3">Nota 3:</label>
                <input value="<?= $not3 ?>" class="form-control" type="double" step="any" name="not3" id="not3" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not4">Nota 4:</label>
                <input value="<?= $not4 ?>" class="form-control" type="double" step="any" name="not4" id="not4" placeholder="Ex: 10" required>
              </div> <br>


              <?php
              if ($_POST) {
                if ((is_numeric($not1)) and (is_numeric($not2)) and (is_numeric($not3)) and (is_numeric($not4))) {
                  if (!isset($_POST["exame"])) {
                    $media = ($not1 + $not2 + $not3 + $not4) / 4;
                    if ($media >= 7) {
                      echo "Aluno/a $nome aprovado/a com média $media";
                    } else {
                      echo '<input class="form-control" type="number" step="any" placeholder="Digite a nota de exame" id="exame" name="exame" required>';
                    }
                  } else {
                    $exame = $_POST["exame"];
                    $media = ((($not1 + $not2 + $not3 + $not4) / 4) + $exame) / 2;
                    if ($media >= 5) {
                      echo "Aluno/a $nome aprovado/a com média $media";
                    } else {
                      echo "Aluno/a $nome reprovado/a com média $media";
                    }
                  }
                
                }else
                  echo "Digite valores numéricos";
              }
              ?>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">

      </div>
      <div class="col-3">
      </div>
    </div>
  </div>
</body>

</html>