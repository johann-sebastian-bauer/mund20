

<?php
include_once("conexao.php");
// if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usernameBanco = $_POST["usuario"];
    $senhaBanco = $_POST["password"];

   
   //alterando
    

    $sql = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");
    
     $sql->execute([$usernameBanco]);
    


    if ($sql->rowCount() == 1) {
        
       $usuario = $sql->fetch();

       if($usuario['senha_usuario'] == $senhaBanco){
    
            header("location:homepage.php");
        }
     else {
        echo "<p>Usuário ou senha incorretos</p>";
    }
}
   
// }
?>