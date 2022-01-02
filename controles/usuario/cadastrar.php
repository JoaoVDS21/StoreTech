<?php
    require_once "../../classes/Usuario.php";

    if(isset($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['repsenha'])){
        foreach ($_POST as $chave => $valor) {
            $$chave = $valor;
        }
        if ($senha == $repsenha) {
            $objUsuario = new Usuario();
            $objUsuario->setNome($nome);
            $objUsuario->setEmail($email);
            $objUsuario->setSenha($senha);
            $objUsuario->cadastrar();
            header("Location: ../../index.php");
        } else {
            echo '<a href="javascript:window.history.back()">Senha inválida. Clique aqui para voltar</a>';
        }
      } else {
          header("Location: ../../index.php");
      }
?>