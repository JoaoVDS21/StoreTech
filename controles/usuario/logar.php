<?php 
    require_once "../../classes/Usuario.php";
    if(isset($_POST['email'],$_POST['senha'])){
        foreach ($_POST as $chave => $valor) {
            $$chave = $valor;
        }
            $objUsuario = new Usuario();
            $objUsuario->setEmail($email);
            $objUsuario->setSenha($senha);

        if ($objUsuario->logar()) {
            header("Location: ../../index.php");
        } else {
            echo '<a href="javascript:window.history.back()"> E-mail e/ou Senha inválidos. Clique aqui para voltar</a>';
        }
      } else {
          header("Location: ../../login.php");
      }
?>