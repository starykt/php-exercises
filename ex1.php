<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Cadastro de Gastos</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Dadas as seguintes entradas: quilometragem inicial, quilometragem final, 
    litros consumidos, preço do litro de combustível. Faça um programa que imprima
    o seguinte relatório: distância percorrida, valor total gasto e o consumo do carro
    (quantos quilômetrospercorre com 1 litro de combustível). -->

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
        <h1>Calculadora de Gastos</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="q-inicial">Quilometragem inicial:</label>
                <input class="form-control" type="double" name="q-inicial" id="q-inicial" placeholder="Ex: 100" required>
              </div>
              <div class="form-group">
                <label for="q-final">Quilometragem final:</label>
                <input class="form-control" type="double" name="q-final" id="q-final" placeholder="Ex: 120" required>
              </div>
              <div class="form-group">
                <label for="litros">Litros consumidos:</label>
                <input class="form-control" type="double" name="litros" id="litros" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="preco-litro">Preço p/ litro:</label>
                <input class="form-control" type="double" name="preco-litro" id="preco-litro" placeholder="Ex: 5" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>

              <?php

              if (isset($_GET['q-inicial']) and (isset($_GET['q-final'])) and (isset($_GET['litros'])) and (isset($_GET['preco-litro']))) {
                $qInicial = $_GET['q-inicial'];
                $qFinal = $_GET['q-final'];
                $litros = $_GET['litros'];
                $precoLitro = $_GET['preco-litro'];

                if ((is_numeric($qInicial)) and (is_numeric($qFinal)) and (is_numeric($litros)) and (is_numeric($precoLitro))) {
                  $valorGasto = number_format($litros * $precoLitro, 2);
                  $distancia = $qFinal - $qInicial;
                  $consumo = number_format($valorGasto / $distancia, 2);
                  echo "<p>Você percorreu $distancia Km, com R$ $valorGasto. Consumo de: $consumo litros p/ km</p>";
                } else
                  echo "Digite valores númericos válidos!";
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