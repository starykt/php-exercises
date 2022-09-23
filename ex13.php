<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Arrays</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Criar um array com um número x de número inteiros 
    (fornecido pelo usuário), exibir a soma dos elementos
    do array, a média dos elementos, o menor e o maior elemento e a
    suas respectivas posiçõesdo array.  -->

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
      <div class="col-12">
        <h1>Arrays</h1>
        <div class="card" style="background-color: #F8F9FA;">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="numero">Digite o número desejado de valores no array:</label>
                <input class="form-control" type="number" name="numero" id="numero" placeholder="Ex: 100" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Criar</button>
              </div> <br>

              <?php
                if($_POST) {
                  $vetor = [];
                  $numero = $_POST['numero'];
                  for ($i = 1; $i <= $numero; $i++) {
                      array_push($vetor, rand(0, 100));
                  }
                
                  $soma = 0;
                  foreach($vetor as $numero) {
                      $soma+=$numero;
                  }
                  $media = number_format($soma / count($vetor), 2);
                  $maior = max($vetor);
                  $iMaior = array_search($maior, $vetor);
                  $menor = min($vetor);
                  $iMenor = array_search($menor, $vetor);

                  echo "<div class='row'>";
                    echo "<div class='col-sm-6'>";
                      echo "<div class='card'>";
                        echo "Soma do vetor: $soma <br>";
                        echo "Média: $media <br>";
                        echo "Maior valor: $maior [$iMaior] <br>";
                        echo "Menor valor: $menor [$iMenor]";
                      echo "</div>";
                    echo "</div>";
                    echo "<div class='col-sm-6'>";
                      echo "<div class='card'>";
                        echo "<br> Vetor: <pre>";
                        print_r($vetor);
                      echo "</div>";
                    echo "</div>";
                }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>