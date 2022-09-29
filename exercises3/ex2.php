<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Script</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Crie um documento HTML que permita ao usuário digitar
     cinco nomes de times de futebol. Faça um script PHP com 
     uma função que receba os nomes dos times submetidos a 
     partir do documento HTML anterior e salve-os em um arquivo “times.txt”. 
     O script deverá ser capaz de imprimir os nomes salvos no arquivo.  -->

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
        <h1>Exercício 2</h1>
        <div class="card">
        <div class="card-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="time1">Digite o 1° time de futebol:</label>
              <input class="form-control" type="text" name="time1" id="time1" placeholder="Corinthians" required>
            </div> <br>
            <div class="form-group">
              <label for="time2">2° time escolhido:</label>
              <input class="form-control" type="text" name="time2" id="time2" placeholder="Santos" required>
            </div> <br>
            <div class="form-group">
              <label for="time3">3° time escolhido:</label>
              <input class="form-control" type="text" name="time3" id="time3" placeholder="Palmeiras" required>
            </div> <br>
            <div class="form-group">
              <label for="time4">4° time escolhido:</label>
              <input class="form-control" type="text" name="time4" id="time4" placeholder="São Paulo" required>
            </div> <br>
            <div class="form-group">
              <label for="time5">5° time escolhido:</label>
              <input class="form-control" type="text" name="time5" id="time5" placeholder="Flamengo" required>
            </div> <br>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-outline-dark">Armazenar</button>
            </div> <br>
          </form>

          <?php
          
          if ($_POST) {
            $t1 = $_POST['time1'];
            $t2 = $_POST['time2'];
            $t3 = $_POST['time3'];
            $t4 = $_POST['time4'];
            $t5 = $_POST['time5'];

            $guarda_time = fopen("times.txt", "w+");

            fwrite($guarda_time, $t1 . "\n");
            fwrite($guarda_time, $t2 . "\n");
            fwrite($guarda_time, $t3 . "\n");
            fwrite($guarda_time, $t4 . "\n");
            fwrite($guarda_time, $t5 . "\n");

            echo "Times escolhidos e armazenados: <br>";
            if (file_exists("times.txt")) {
              foreach (file("times.txt") as $line) {
                echo $line . "<br>";
              }
            }
          }

          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>