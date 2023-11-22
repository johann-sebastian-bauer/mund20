

<?php

date_default_timezone_set('America/Sao_Paulo');
try{
    $conn = new PDO("mysql:dbname=mund20;host=localhost;charset=utf8","root","");
}
catch(PDOException $erro)
{
    echo("ERRO NA CONEXÃO: <br>".$erro->getMessage());
}

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usernameBanco = $_POST["usuario"];
    $senhaBanco = $_POST["password"];

   
   
    

    $sql = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");
    
     $sql->execute([$usernameBanco]);
    


    if ($sql->rowCount() == 1) {
        
       $usuario = $sql->fetch();

       if($usuario['senha_usuario'] == $senhaBanco){
    
            header("location:homepage.html");
        }
     else {
        echo "Usuário ou senha incorretos";
    }
}
   
// }
?>