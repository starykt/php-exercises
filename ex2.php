<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Cadastro de Votos</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Faça um programa para ler o número de votos brancos,
    nulos e válidos de uma eleição. Calcular e escrever o percentual
    que cada um representa em relação ao total de eleitores. -->

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
        <h1>Calculadora de Votos</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nulos">Votos nulos:</label>
                <input class="form-control" type="number" name="nulos" id="nulos" placeholder="Ex: 100" required>
              </div>
              <div class="form-group">
                <label for="brancos">Votos brancos:</label>
                <input class="form-control" type="number" name="brancos" id="brancos" placeholder="Ex: 120" required>
              </div>
              <div class="form-group">
                <label for="validos">Votos válidos:</label>
                <input class="form-control" type="number" name="validos" id="validos" placeholder="Ex: 10" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div> <br>

              <?php

              if (isset($_POST['nulos']) and (isset($_POST['brancos'])) and (isset($_POST['validos']))) {
                $vNulos = $_POST['nulos'];
                $vBrancos = $_POST['brancos'];
                $vValidos = $_POST['validos'];

                if (($vNulos < 0) or ($vBrancos < 0) or ($vValidos < 0)) {
                  echo "Digite apenas valores positivos.";
                } else {
                  $total = $vNulos + $vBrancos + $vValidos;

                  $porcNulos = number_format($vNulos / $total * 100, 2);
                  $porcBrancos = number_format($vBrancos / $total * 100, 2);
                  $porcValidos = number_format($vValidos / $total * 100, 2);

                  echo "<p>Votos nulos: " . $porcNulos . "%</p>";
                  echo "<p>Votos brancos: " . $porcBrancos . "%</p>";
                  echo "<p>Votos válidos: " . $porcValidos . "%</p>";
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