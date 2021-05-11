<?php
require("../../database/conexaoBD.php");
session_start();

$acao = isset($_POST["acao"])?$_POST["acao"]:"erro";

switch ($acao) {
    case "login":
        
//implementar hoje

        //receber os campos usuário e senha do post

        //$usuario = $_GET["usuario"];
        $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"erro";
        $senha = isset($_POST["senha"])?$_POST["senha"]:"erro";
 
        //SELECT * FROM tbl_administrador WHERE usuario = $usuario;
         $sql = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario'";
         //executar o sql
         $resultado =  mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 
         $dados = mysqli_fetch_array($resultado);

         $usuarios = $dados["usuario"];
         $senhas = $dados["senha"];

         echo "$usuarios <br>";
         echo "$senhas <br>";

         //resultado se o usuário existe
         if ($usuarios == $usuario && $senhas == $senha){
 
            $_SESSION["dado"] = $dados["usuario"];
             echo "usuario e senha corretos <br>";
             
         }else{
             echo   "usuario ou senha invalido";
         }        
         //verificar se a senha está correta
        
         //se estiver correta, salvar o id e o nome do usuário na sessão $_SESSION
         //se a senha estiver errada, criar uma mensagem de "usuário e/ou senha inválidos"
         //redirecionar para a tela de listagem de produtos
         //header("location: ../../produtos/index.php ");
    
        break;
    case "logou":
        //implementar futuramente
        break;
}
 