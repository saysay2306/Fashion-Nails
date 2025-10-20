<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Nails</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"  rel="stylesheet"  integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"  crossorigin="anonymous"/>
  </head>
  <style>
    .roxo {
      background-color: #9933ffff; /* cor do rodapé */
    }

    body {
      background-color: #e5ccff; /* cor de fundo */
    }
  </style>
  <body>
    <nav class="navbar roxo">
      <div class="d-flex flex-row ">
        <img
          src="img/logo.jpg"
          alt="Logo"
          width="90"
          height="84"
          class="d-inline-block align-text-top"
        />
        <p class="mt-4">UNHAS COM GLAMOUR</p>
      </div>
    </nav>
    <!--fim da nav-->

    <div class="container">
      <div class="items-center">
        <h1>Unhas com Glamour</h1>
        <h2>Agende seu horário</h2>

       
        <form action="funçoes.php?tp=agenda" method="post">
          <div class="col-md-4">
             <h4>Alongamento</h4>
            <select class="form-control" name="estado" id="">
              <option value="">Selecione o Alongamento</option>
              <option value="Banho em Gel">Banho em Gel</option>
              <option value="Fibra de Vidro">Fibra de Vidro</option>
              <option value="Brindagem">Brindagem</option>
            </select>
          </div>

          <h4>Manutenção</h4>
          <div class="col-md-4">
            <select class="form-control" name="estado" id="">
              <option value="">Selecione a Manutenção</option>
              <option value="Banho em Gel">Banho em Gel</option>
              <option value="Fibra de Vidro">Fibra de Vidro</option>
              <option value="Brindagem">Brindagem</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="disabledTextInput" class="form-label"
              ><h4>Dia desejado</h4></label
            >
            <input
              type="date"
              name="Dia"
              id=""
              class="form-control"
              placeholder="Digite a data desejada para o atendimento..."
            />
          </div>

          <div class="mb-3">
            <label for="disabledTextInput" class="form-label"
              ><h4>Hora desejada</h4></label
            >
            <input type="time" name="Hora" id="" class="form-control" />
          </div>
        </form>
      </div>

      <footer class="fixed-bottom roxo ">
        <p>unhas com glamour</p>
      </footer>
    </div>
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"  crossorigin="anonymous"></script>
  </body>
</html>
