<?php
    // Requititos
    require '../Models/Usuario.php';
    require '../DAO/UsuarioDAO.php';

    //
    session_start();
    
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
    $loginResult = $dao->loginUsuario($usuario);
    
    // Verifica objeto e verifica resultado para redirecionamento/mensagem
    if($loginResult == true) {
        $_SESSION["statusLogin"] = 1;
        $_SESSION["login"] = $usuario->getLogin();
        $_SESSION["mensagem"] = "Bem vindo ".$_SESSION["login"]. "!";
        header("location: ../Views/Shared/_Layout.php?CodPg=5");
    } else {
        $_SESSION["statusLogin"] = 0;
        $_SESSION["mensagem"] = "Login (".$usuario->getLogin().") ou senha (".$usuario->getSenha().") não encontrado!";
        header("location: ../Views/Shared/_Layout.php?CodPg=3");
    }
    
?>