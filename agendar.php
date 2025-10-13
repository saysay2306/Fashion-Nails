<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Nails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    .roxo {
        background-color: #9933ffff; /* cor do rodapé */
    }

    body {
        background-color: #E5CCFF; /* cor de fundo */
    }
   
</style>
<body>
    <header data-bs-theme="dark"></header>
  <nav class="navbar roxo">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.jpg" alt="Logo" width="90" height="84" class="d-inline-block align-text-top">
        UNHAS COM GLAMOUR
      </a>
    </div>
  </nav>
    <div class="container">
        <div class="items-center">
    <h1>Unhas com Glamour</h1>
    <H2>Agende seu horário</H2>
    <H4>Alongamento</H4>
    <div class="col-md-4">
            <select class="form-control" name="estado" id=""><option value="">Selecione o Alongamento</option>
                <option value="Banho em Gel">Banho em Gel</option>
                <option value="Fibra de Vidro">Fibra de Vidro</option>
                <option value="Brindagem">Brindagem</option>
            </select>
        </div>
        <H4>Manutenção</H4>        
            <div class="col-md-4" >
                <select class="form-control"name="estado" id=""><option value="">Selecione a Manutenção</option>
                    <option value="Banho em Gel">Banho em Gel</option>
                    <option value="Fibra de Vidro">Fibra de Vidro</option>
                    <option value="Brindagem">Brindagem</option>
                </select>
            </div>
        <div class="mb-3">
            
                <label for="disabledTextInput" class="form-label"><H4> Dia desejado</H4></label>
                <input type="date" name="Dia" id="" class="form-control" placeholder="Digite a data desejada para o atendimento...">
                </div>
 
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label"><H4>Hora desejada</H4></label>
                <input type="time" name="Hora" id="" class="form-control">
                </div>        
    </div>
     
        <footer class="fixed-bottom roxo">
            <nav class="navbar navbar-expand-lg roxo">
            <div class="container-md">
              <a class="navbar-brand" href="#">UNHAS COM GLAMOUR</a>
            </div>            
        </footer>

    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>