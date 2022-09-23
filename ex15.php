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
  <!-- Crie um programa que armazene em um array 10 jogos da megasena,
    com 6 númerosinteiros cada (de 1 a 60) e em seguida crie um método que sorteie 6
    dezenas e exiba a quantidade de acertos de cada jogo. -->

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
      <div class="col-10">
        <h1>Exercício 15 <span class="badge text-bg-dark">MegaSena</span></h1>
        <div class="card" style='background-color: #F2F2F2'>
          <?php

          $jogos = [];

          for ($jogo = 0; $jogo < 10; $jogo++) {
            $numeros = [];
            for ($i = 0; $i < 6; $i++) {
              array_push($numeros, rand(1, 60));
            } // com os dois for são realizados um por um a criação de 60 vetores com números aleatórios
            array_push($jogos, $numeros);
          }

          $vet_premiado = [];
          for ($i = 0; $i < 6; $i++) {
            array_push($vet_premiado, rand(1, 60)); // criação do vetor com os números premiados
          }

          $cont_jogo = 1;
          foreach ($jogos as $jogo) { // passa pelos vetores/cartelas
            $acertos = 0;
            for ($i = 0; $i < 6; $i++) { // passa pelos números sorteados
              for ($j = 0; $j < 6; $j++) { // passa pelos números da cartela
                if ($jogo[$j] == $vet_premiado[$i]) { // se tiver o número no vetor
                  $acertos++; // novo acerto
                }
              }
            }
            echo "<p> <strong>Jogo</strong>: $cont_jogo<br> 
              $acertos acertos.</p>";
            $cont_jogo++;
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