<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Categorias</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Dada a idade de um nadador classifique-o em uma das seguintes categorias:
    -Infantil A = 5 a 7 anos
    -Infantil B = 8 a 11 anos
    -Juvenil A = 12 a 13 anos
    -Juvenil B = 14 a 17 anos
    -Adultos = Maiores de 18 anos -->

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
      <div class="col-9">
        <h1>Categorias de idade</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="idade">Idade:</label>
                <input class="form-control" type="number" name="idade" id="idade" placeholder="Ex: 100" required>
              </div><br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div> <br>

              <?php
              $idade = 0;
              if (isset($_POST['idade'])) {
                $idade = $_POST['idade'];

                if (($idade < 0)) {
                  echo "Digite apenas valores positivos.";
                } 
              }
              ?>

              <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">Idades</th>
                    <th scope="col">Categorias</th>
                  </tr>
                </thead>
                <tbody>
                  <tr <?php
                      if (($idade >= 0) && ($idade < 8))
                        echo "class='table-info'";
                      ?>>
                    <th>5 a 7 anos</th>
                    <td>Infantil A</td>
                  </tr>
                  <tr <?php
                      if (($idade >= 8) && ($idade < 12))
                        echo "class='table-info'";
                      ?>>
                    <th>8 a 11 anos</th>
                    <td>Infantil B</td>
                  </tr>
                  <tr <?php
                      if (($idade >= 12) && ($idade < 14))
                        echo "class='table-info'";
                      ?>>
                    <th>12 a 13 anos</th>
                    <td>Juvenil A</td>
                  </tr>
                  <tr <?php
                      if (($idade >= 14) && ($idade < 18))
                        echo "class='table-info'";
                      ?>>
                    <th>14 a 17 anos</th>
                    <td>Juvenil B</td>
                  </tr>
                  <tr <?php
                      if (($idade >= 18))
                        echo "class='table-info'";
                      ?>>
                    <th>Maiores de 18</th>
                    <td>Adulto</td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">

      </div>
    </div>
  </div>
</body>

</html>