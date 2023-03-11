<?php

//Gerar Senha
// echo password_hash("123456", PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><img src="./img/logo.png" alt="" srcset=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
          <?php
          if (isset($_SESSION['id']) and (isset($_SESSION['nome']))) {
            echo "Bem vindo " . $_SESSION['nome'] . "<br>";
          } else {
            echo "<div id='dados-usuario'>";
            echo "<button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#loginModal'>LOGIN</button>";
            echo "</div>";
          }
          ?>
        </form>
      </div>
    </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Fazer Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="login-usuario-form">
            <span id="msgAlertErroLogin"></span>
            <div class="mb-3">
              <label for="email" class="col-form-label">Usuário</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="Digite o seu email">
            </div>

            <div class="mb-3">
              <label for="senha" class="col-form-label">Senha</label>
              <input type="password" name="senha" class="form-control" id="senha" autocomplete="on"
                placeholder="Digite a sua senha"></input>
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="js/custom.js"></script>
</body>

</html>