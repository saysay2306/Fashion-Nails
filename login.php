<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Nails</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    >
    <style>
      .roxo {
        background-color: #9933ffff; /* cor do rodapé */
      }
      body {
        background-color: #E5CCFF; /* cor de fundo */
      }
    </style>
  </head>
  <body class="overflow-hidden">
    <nav class="navbar roxo">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="img/logo.jpg"
            alt="Logo"
            width="90"
            height="84"
            class="d-inline-block align-text-top"
          >
          UNHAS COM GLAMOUR
        </a>
      </div>
    </nav>

    <form
      action="funçoes.php?tp=login"
      method="post"
      class="d-flex container  flex-column gap-3 justify-content-center align-items-center vh-100"
    >
      <h1>Login</h1>
      <input
        type="email"
        name="email"
        id=""
        class="form-control w-50"
        placeholder="Digite seu email..."
      >
      <input
        type="passworld"
        name="senha"
        id=""
        class="form-control w-50"
        placeholder="Digite sua senha..."
      >
      <input
        type="submit"
        class="btn btn-primary btn-lg"
        value="logar"
      >
      <p>não tem uma conta? <a href="cadastro.php">cadastre-se aqui</a></p>
    </form>

    <footer class="fixed-bottom roxo">
      <p>UNHAS COM GLAMOUR</p>
    </footer>
        


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
