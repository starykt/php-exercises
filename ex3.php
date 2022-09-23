<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Cadastro de Consórcio</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Faça um programa que leia o número total de prestações de um consórcio,
    o total de prestações pagas e o valor atual da prestação. O programa deve calcular
    e apresentar o saldo devedor atual e a quantidade de prestações sem pagar. -->

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
        <h1>Consórcio</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="totalPrest">Quantidade de prestações:</label>
                <input class="form-control" type="number" name="totalPrest" id="totalPrest" placeholder="Ex: 100" required>
              </div>
              <div class="form-group">
                <label for="pagoPrest">Prestações já pagas:</label>
                <input class="form-control" type="number" name="pagoPrest" id="pagoPrest" placeholder="Ex: 20" required>
              </div>
              <div class="form-group">
                <label for="valorPrest">Valor da prestação (R$):</label>
                <input class="form-control" type="double" name="valorPrest" id="valorPrest" placeholder="Ex: 10.50" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div> <br>

              <?php

              if (isset($_POST['totalPrest']) and (isset($_POST['pagoPrest'])) and (isset($_POST['valorPrest']))) {
                $totalPrest = $_POST['totalPrest'];
                $pagoPrest = $_POST['pagoPrest'];
                $valorPrest = $_POST['valorPrest'];

                if (($totalPrest < 0) or ($pagoPrest < 0) or ($valorPrest < 0) or (!is_numeric($valorPrest))) {
                  echo "Digite apenas valores positivos.";
                } else {
                  $total = $valorPrest * $totalPrest;
                  $totalPago = $valorPrest * $pagoPrest;
                  $totalDeve = $total - $totalPago;
                  $restante = $totalPrest - $pagoPrest;

                  echo "Ainda faltam pagar: R$ $totalDeve em $restante parcelas";
                }
              }
              ?>
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