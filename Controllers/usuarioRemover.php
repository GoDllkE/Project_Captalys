<?php
    // Requititos
    require '../Models/Usuario.php';
    require '../DAO/UsuarioDAO.php';

    // Valores do Form
    $login = $_POST["user_login"];
    $senha = $_POST["user_senha"];

    // Objeto
    $usuario = new Usuario();

    // Preenche Model
    $usuario->setLogin($login);
    $usuario->setSenha($senha);

    // Objeto
    $dao = new UsuarioDAO();
    
    // Verifica se usuario é o usuario atual que está sendo removido
    // Se sim, limpa dados da sessão (LogOff) antes de proceder.
    if($usuario->getLogin() == $_SESSIO["login"]) {
       $_SESSION["statusLogin"] = 0;
        $_SESSION["login"] = "";
    }
    
    // Verifica objeto e verifica resultado para redirecionamento/mensagem
    if($dao->deletaUsuario($usuario)) {
        $_SESSION["mensagem"] = "Usuario deletado com sucesso!";
        header("location: ../Views/Shared/_Layout.php");
    } else {
        $_SESSION["mensagem"] = "Usuario não deletado.";
        header("location: ../Views/Shared/_Layout.php?CodPg=5");
    }
    
?>