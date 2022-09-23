<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Vetores - Ordem</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Criar um array com 50 números inteiros, exibi-lo em ordem crescente
    e exibir a quantidade de números pares e de números primos. -->

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
        <h1>Exercício 12</h1>
        <div class="card" style='background-color: #212529'>
          <?php
          $vet = []; // criação do vetor
          for ($i = 1; $i <= 50; $i++) { // inserindo valores
              array_push($vet, rand(0, 100));
          }
          sort($vet); // ordenar
  
          $totalPar = 0;
          $totalPrimos = 0;
  
          foreach ($vet as $number) {
  
              if ($number % 2 == 0) {
                  $totalPar++; // adiciona pares
              }
  
              $divisores = 0;
              for ($i = $number; $i >= 1; $i--) {
                  if ($number % $i == 0) {
                      $divisores++;
                  }
              }
              if ($divisores == 2) {
                  $totalPrimos++;  // adiciona primos
              }
          }
          echo "</pre>";
          echo "<p style='background-color: white'>Há $totalPar números pares e $totalPrimos números primos no vetor <br>";
          echo "Observação: cria os valores do array de forma aleatória.";
          echo "<div class='card'>";
            echo "<pre>";
            print_r($vet);
            echo "</div>";
          ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>