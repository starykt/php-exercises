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
  <!-- Crie um script que gere um arquivo “nome_aluno.txt”, abra-o e guarde 03 frases nele.
     Depois crie um script que imprima o conteúdo gravado nesse arquivo.  -->

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
        <h1>Exercício 1</h1>
        <div class="card">
          <?php

          $file = fopen("nome_aluno.txt", "w+") 
          or die("Falha na abertura do arquivo!");

          fwrite($file, "⁠Os adultos são crianças feridas que sobreviveram ao limbo.\n");
          fwrite($file, "\nNão te amo como se fosses rosa de sal... amo-te como se amam certas
          coisas obscuras, secretamente, entre a sombra e a alma. \n");
          fwrite($file, "\nViver é dramático, mas não há escapatória: nasce-se.");

          foreach (file("nome_aluno.txt") as $line) {
            echo $line . "<br>";
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