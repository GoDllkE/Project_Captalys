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
    
    // Salva objeto e verifica resultado para redirecionamento/mensagem
    if($dao->salvaUsuario($usuario)) {
        $_SESSION["mensagem"] = "Cadastro realizado com sucesso. Faça login!";
        header("location: ../Views/Shared/_Layout.php?CodPg=3");
    } else {
        $_SESSION["mensagem"] = "Cadastro não concluido. Tente novamente.";
        header("location: ../Views/Shared/_Layout.php?CodPg=4");
    }
    
?>