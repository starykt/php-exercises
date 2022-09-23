<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>PHP</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Crie um programa que a partir de um texto e uma palavra,
    fornecidos pelo usuário, realize uma busca no texto e exiba a posição
    inicial e final da palavra no texto. Exiba também a quantidade de letras e
    palavras contidas no texto. Por fim, crie um array para armazenar as letras que
    aparecem no texto e a quantidade de vezes que cada uma aparece. -->

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
        <h1>Exercício 14</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="texto">Texto:</label>
                <textarea class="form-control" name="texto" id="texto" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="palavra">Palavra buscada</label>
                <input class="form-control" type="text" name="palavra" id="palavra" placeholder="Ex: caramujo" required>
              </div><br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Buscar</button>
              </div><br>

              <?php
              if (isset($_POST['texto']) and (isset($_POST['palavra']))) {
                $texto = $_POST["texto"];
                $palavra = $_POST["palavra"];

                $pos = strpos($texto, $palavra); // função que encontra a primeira ocorrência da palavra

                if ($pos) { // se tem a palavra
                  $final = $pos + strlen($palavra); // função retorna o tamanho da string
                  echo "A palavra <strong>$palavra</strong> foi encontrada.<br>";
                  echo "Posição inicial: $pos <br>Final: $final";
                } else {
                  echo "Não foi encontrada a palavra $palavra no texto.";
                }

                echo "<div class='card-body'>";
                  echo "<br><br> O texto tem " . strlen($texto) . " letras."; 
                  echo "<br> O texto tem " . str_word_count($texto) . " palavras.<br><br>";
                  // função retorna o número de letras da string
                echo "</div>";
                
                $letras = []; // armazena o alfabeto

                foreach (range('a', 'z') as $letra) {
                  $aparece = substr_count($texto, $letra); // a função conta quantas letras tem no texto
                  if ($aparece > 0) {
                    array_push($letras, array("letra" => $letra, "qtde" => $aparece));
                  }
                }

                echo "<div class='row'>";
                  echo "<div class='col-sm-6'>";
                    echo "<div class='card'>";
                    foreach ($letras as $letra) {
                      echo "Letra " . $letra['letra'] . ": " . $letra["qtde"] . " vezes.<br>";
                    }
                  echo "</div>";
                echo "</div>";

                echo "<div class='col-sm-6'>";
                  echo "<div class='card'>";
                    echo "Palavra: $palavra<br> Texto:<br>$texto";
                  echo "</div>";
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