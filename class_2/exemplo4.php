<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      Aulas de PHP - Programando em linguagem de script
    </title>
    <meta name="auhthor" content="henrique macedo">
    <meta name="description" content="Primeira aula prática de PHP - linguagem de programação web">
    <meta name="keywords" content="PHP, programação, variáveis, html, css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <main class="container-fluid">
      <header class="jumbotron">
        <h1 class="display-3 text-center text-primary"> Exemplos PHP </h1>
      </header>
      <section>
        <h2>Trabalhando com Algoritmos de cálculos: </h2>
        <p>
            Desenvolva um programa que leia a altura (2) e base (3) de um retângulo. Seu programa deve calcular a área do retângulo.
        </p>
        <?php
          $base;
          $altura;
          $area;
          $base = 2;
          $altura = 3;
          $area = ($base * $altura)/2;
          echo "<p>Altura: ".$altura.
               "<br>Base: ".$base."</p>";
        
          echo "Cálculo: ($base * $altura) = $area";
        ?>
      </section>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="exemplo2.php">Exemplo 02</a></li>
          <li><a href="exemplo3.php">Exemplo 03</a></li>
          <li><a href="exemplo4.php">Exemplo 04</a></li>
          <li><a href="exemplo5.php">Exemplo 05</a></li>
          <li><a href="exemplo6.php">Exemplo 06</a></li>
        </ul>
      </nav>
    </main>
  </body>
</html>
