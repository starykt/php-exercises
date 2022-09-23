<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Série Fibonacci</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Escreva um programa que apresente a série de Fibonacci até o vigésimo quinto termo.
    A série de Fibonacci é formada pela sequência: 1, 1, 2, 3, 5, 8, 13, 21, 34, ... . Esta
    série se caracteriza pela somade um termo atual com o seu anterior subsequente, para que
    seja formado o próximo valor da sequência. (utilize for) -->

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
        <h1>Exercício 10 <span class="badge text-bg-dark">Série Fibonacci</span></h1>
        <div class="card">
          <?php
          $numero = 25;
          $ultimo = 1;
          $penultimo = 0;
          $atual = 0;
          for ($i = 1; $i <= $numero - 2; $i++) {
            $atual = $ultimo + $penultimo;
            echo $atual . "<br>";
            $penultimo = $ultimo;
            $ultimo = $atual;
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