<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Nails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    .roxo{
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
    <h1>Preenche todas as informações!</h1>
    <form action="áreadocliente.php" method="post">
    <div class="row container justify-content-center" >
        <div class="col-stat-2 col md-1" >  
            <input type="text" name="nome" id="" class="form-control" placeholder="Digite seu nome...">
        </div>
        <div class="row" >
            <div class="col md-3">  
                <input type="email" name="email" id="" class="form-control" placeholder="Digite seu email...">
            </div>
        <div class="row">
            <div class="col-md-3">
                <input type="password" name="senha" id="" class="form-control" placeholder="Digite sua senha...">
            </div>
            <div class="col-md-3">
                <input type="password" name="confirmarsenha" id="" class="form-control" placeholder="Confirme sua senha...">
            </div>
            <div class="row md-3 text-center">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar">
                    </div>
            </div>
        </div>
         <nav class="navbar navbar-expand-lg roxo">
      <div class="container-md">
        <a class="navbar-brand" href="#">UNHAS COM GLAMOUR</a>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>