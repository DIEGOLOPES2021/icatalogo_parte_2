<?php
require("../../database/conexaoBD.php");

session_start();

// Função para a validação dos campos
function validacaoCampos (){
    $erros = [];
    
    if(!isset($_POST["descricao"]) && $_POST["descricao"] == ""){
        $erros[] = "O campo descrição é obrigatorio";
    }

    if(!isset($_POST["peso"]) && $_POST["peso"] == ""){
        $erros[] = "O campo peso é obrigatorio";
    }elseif(!is_numeric(str_replace(",", ".", $_POST["peso"]))){
        $erros[] = "O campo peso deve ser um número";
    } 

    if(!isset($_POST["quantidade"]) && $_POST["quantidade"] == ""){
        $erros[] = "O campo quantidade é obrigatorio";
    }elseif(!is_numeric(str_replace(",", ".", $_POST["quantidade"]))){
        $erros[] = "O campo quantidade deve ser um número";
    } 

    if(!isset($_POST["cor"]) && $_POST["cor"] == ""){
        $erros[] = "O campo cor é obrigatorio";
    }

    if(!isset($_POST["valor"]) && $_POST["valor"]==""){
        $erros[] = "O campo valor é obrigatorio";
    }elseif(!is_numeric(str_replace(",", ".", $_POST["valor"]))){
        $erros[] = "O campo valor deve ser um número";
    }

    if(isset($_POST["desconto"]) && $_POST["desconto"] != ""){
        if(!is_numeric(str_replace(",", ".", $_POST["valor"]))){
            $erros[] = "O campo desconto deve ser um número";
        }
    }
    return $erros;
}


switch ($_POST["acao"]) {

    case "inserir":

        $erros = validacaoCampos();
        if(count($erros) > 0){
            $_SESSION["erros"] = $erros;

            header("location: index.php?erro=houveErro");
        }else{
        
            $descricao = $_POST["descricao"];
            // Trocando a virgula por ponto
            $peso = str_replace(",", ".", $_POST["peso"]);
            $quantidade = $_POST["quantidade"];
            $cor = $_POST["cor"];
            // Trocando a virgula por ponto
            $valor = str_replace(",", ".", $_POST["valor"]);
            $tamanho = $_POST["tamanho"];
            $desconto = $_POST["desconto"] != "" ? $_POST["desconto"] : 0;
        
            $sqlinsert= "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto)
                            VALUES ('$descricao', $peso, $quantidade, '$cor', '$tamanho', $valor, $desconto)";
            
            $resultado = mysqli_query($conexao, $sqlinsert) or die(mysqli_error($conexao));   
            
            header("location: index.php?mensagem=padrão");
        }
        break;
}