<?php session_start();?>

﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Captalys</title>

    <!-- Parallax -->
    <link rel="stylesheet" href="../../Content/css/Parallax.css" />

    <!-- Load personalized CSS -->
    <link rel="stylesheet" href="../../Content/css/Site.css" />
    <link rel="stylesheet" href="../../Content/css/Personalizado.css" />

    <!-- Load bootstrap -->
    <link rel="stylesheet" href="../../Content/css/bootstrap.css" />

    <!-- Size of device-->
    <meta name="viewport" content="width=device-width" />
</head>
<body>
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- Brand and logo -->
            <a class="navbar-brand" href="./_Layout.php">CAPTALYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Nav Content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if(isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="./_Layout.php?CodPg=5">Minha Home</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="./_Layout.php">Home</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="./_Layout.php?CodPg=1">Sobre</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./_Layout.php?CodPg=2">Contato</a>
                    </li>
                </ul>

                <!-- Check if session already exist -->
                <section id="">
                    <?php if(isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>
                        <div class="form-inline my-2 my-lg-0">
                            <span class="navbar-text">Logado como: <b><font color="yellow"><a href="#"><?=$_SESSION["login"];?></a></font></b></span>
                            <div style="margin-left: 15px;">
                                <a href="../../Controllers/usuarioLogoff.php">
                                    <input type="button" class="btn btn-outline-danger" style="width: 100px" value="Sair" onclick="alert('Deslogando..');">
                                </a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <form class="form-inline">
                            <a href="./_Layout.php?CodPg=3">
                                <input type="button" class="btn btn-outline-info" style="width: 75px;" value="Entrar">
                            </a>
                            <a href="./_Layout.php?CodPg=4">
                                <input type="button" class="btn btn-outline-success" value="Cadastrar" style="width: 100px; margin-left: 5px;">
                            </a>
                        </form>    
                    <?php } ?>
                </section>
            </div>
        </nav>
    </header>
    <div id="body">
        <br />
        <?php /* Bloco para carregar conteudo index padrão, se não ouver CodPg */
            if (!isset($_GET["CodPg"])) { include '../Home/index.php';} 
            else { 
        ?>
        <section class="content-wrapper main-content clear-fix">
            <br />
            <?php /* Bloco para carregar conteudo diversificado */
                $CodPg = $_GET["CodPg"];
                switch ($CodPg) {
                    case 1:
                        include '../Home/sobre.php';
                        break;
                    case 2:
                        include '../Home/contato.php';
                        break;
                    case 3: // Necessita de não estar em sessão (usuario logado)
                        if (!isset($_SESSION["statusLogin"]) || $_SESSION["statusLogin"] != 1) {
                            include '../Usuario/login.php';
                        } else { include './acessoNegado.php';}
                        break;
                    case 4: // Necessita de não estar em sessão (usuario logado)
                        if (!isset($_SESSION["statusLogin"]) || $_SESSION["statusLogin"] != 1) {
                            include '../Usuario/cadastrar.php';
                        } else { include './acessoNegado.php';}
                        break;
                    case 5: // Necessita de sessão (usuario logado)
                        if ($_SESSION["statusLogin"] == 1) {
                            include '../Usuario/index.php';
                        } else { include './acessoNegado.php';}
                        break;
                    default:
                        include './paginaErro.php';
                        break;
                }
            }
            ?>
        </section>
    </div>
    <footer>
        <div class="content-wrapper">
            <div class="float-left">
                <p>&copy; <?=Date('d-m-Y');?> - My PHP Web Page</p>
            </div>
        </div>
    </footer>
</body>
</html>

<!-- Exibe mensagem, se houver uma -->
<?php 
    if (isset($_SESSION["mensagem"]) && $_SESSION["mensagem"] != null) { ?>
        <script type="text/javascript">
            alert("<?=$_SESSION["mensagem"];?>");
        </script>
<?php 
    $_SESSION["mensagem"] = null;
    } ?>

<!-- Load JQuery -->
<script src="../../Scripts/jquery-1.12.4.js"></script>
<script src="../../Scripts/jquery-ui-1.12.1.js"></script>
<script src="../../Scripts/modernizr-2.6.2.js"></script>

<!-- Load Boostrap JS -->
<script src="../../Content/js/Popper.js"></script>
<script src="../../Content/js/bootstrap.js"></script>
<script src="../../Content/js/bootstrap.bundle.js"></script>