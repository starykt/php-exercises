<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Análise de triângulos</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Ler 3 valores para os lados de um triângulo, considerando lados
    como A, B, e C. Verificar se os valores dos lados fornecidos formam
    realmente um triângulo e, se for esta condição verdadeira, indicar qual
    o tipo de triângulo foi formado: isósceles, escaleno ou equilátero, caso os lados fornecidos
    não caracterizem um triângulo, avisar a ocorrência. Sabendo que:
    -Triângulo é uma forma geométrica composta de 3 lados, sendo que cada lado é menor que a soma dos outros dois lados;
    -Um triângulo é isósceles quando possui dois lados iguais e um diferente;
    -Um triângulo é equilátero quando possui todos os lados iguais;-um triângulo é escaleno quando 
    possui todos os lados diferentes. -->

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
      <div class="col-3">
        <h1>Qual triângulo é o seu?</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="lado1">Lado :</label>
                <input class="form-control" type="double" name="lado1" id="lado1" placeholder="Ex: 100" required>
              </div>
              <div class="form-group">
                <label for="lado2">Prestações já pagas:</label>
                <input class="form-control" type="double" name="lado2" id="lado2" placeholder="Ex: 20" required>
              </div>
              <div class="form-group">
                <label for="lado3">Valor da prestação (R$):</label>
                <input class="form-control" type="double" name="lado3" id="lado3" placeholder="Ex: 10.50" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Descobrir</button>
              </div> <br>

              <?php

              if (isset($_POST['lado1']) and (isset($_POST['lado2'])) and (isset($_POST['lado3']))) {
                $lado1 = $_POST['lado1'];
                $lado2 = $_POST['lado2'];
                $lado3 = $_POST['lado3'];

                if (($lado1 < 0) or ($lado2 < 0) or ($lado3 < 0) or (!is_numeric($lado1))
                  or (!is_numeric($lado2)) or (!is_numeric($lado3))
                ) {
                  echo "Digite apenas valores numéricos e positivos.";
                } else {

                  if (
                    ($lado1 == $lado2 && $lado2 != $lado3) ||
                    ($lado1 == $lado3 && $lado3 != $lado2) ||
                    ($lado2 == $lado3 && $lado3 != $lado1)
                  ) {
                    echo "O triangulo é isósceles";
                  } elseif ($lado1 == $lado2 && $lado1 == $lado3) {
                    echo "O triangulo é equilátero";
                  } elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3) {
                    echo "O triangulo é escaleno";
                  }
                }
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="https://neurochispas.com.br/wp-content/uploads/2021/07/diagrama-de-um-triangulo-isosceles.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Triângulo Isósceles</h5>
            <p class="card-text">É aquele que possui dois lados congruentes (com a mesma medida). Nele, os ângulos da base são sempre congruentes.</p>
          </div>
        </div>

      </div>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2021/11/triangulo-equilatero.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Triângulo Equilátero</h5>
            <p class="card-text">O triângulo equilátero é uma figura geométrica plana que possui como principal característica
              os três lados congruentes, ou seja, a medida desses três lados é a mesma.</p>
          </div>
        </div>
      </div>

      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="https://s2.static.brasilescola.uol.com.br/be/2021/06/triangulo-escaleno.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Triângulo Escaleno</h5>
            <p class="card-text">Triângulo escaleno tem todos os lados com medidas diferentes. O triângulo escaleno
              é aquele que tem todos os lados com medidas distintas.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>