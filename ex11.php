<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Tabuadas</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Escreva um programa que exiba as tabuadas de 1 a 100. -->

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
        <h1>Exercício 11 <span class="badge text-bg-dark">Tabuadas</span></h1>
        <div class="card">
            <?php
            for ($i = 1; $i <= 100; $i++) {
              echo "<div class='card'>";
              echo "<h4 class='card-title'>Tabuada do $i:</h4>";
              for ($j = 0; $j < 10; $j++) {
                $calc = $i * $j;
                echo "$i x $j = $calc<br>";
              }
              echo "</div><br>";
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