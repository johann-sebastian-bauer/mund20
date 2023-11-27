<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <title>Registrar-se</title>
    <script src="register.js" defer></script>
  </head>

  <body>

    
    <div id="register">
    

      <form action="register.php" method="post" class="card" id="register-form">
        <div class="card-header">
          <h2>Registrar-se</h2>
        </div>

        <div class="card-content">
          <div class="card-content-area">
            <label for="usuario">Usuário</label>
            <input
              type="text"
              id="usuario"
              autocomplete="off"
              name="usuario"
              required
            />
          </div>

          <div class="card-content-area">
            <label for="password">Senha</label>
            <input
              type="password"
              id="password"
              autocomplete="off"
              name="password"
              required
            />
          </div>
          <?php
include_once("conexao.php");

$usernameBanco = $_POST["usuario"];
$senhaBanco = $_POST["password"];


//alterando


$sql = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");

 $sql->execute([$usernameBanco]);



if ($sql->rowCount() == 1) {
    
    echo "<p>Usuario ja existe</p>";
    
}
else{
$sql = $conn->prepare("INSERT INTO usuario(nome_usuario, senha_usuario) VALUES (?,?)");

$sql->execute([$usernameBanco,$senhaBanco]);
<<<<<<< HEAD
}
=======
}?>

        </div>

        <div class="card-footer">
          <input
            type="submit"
            id="botao-submit"
            value="Registrar"
            class="submit"
          />
        </div>
      </form>
    </div>
  </body>
</html>


>>>>>>> 77da9e098bc5e16051ce0081cf9b2e5a241a6fa1
