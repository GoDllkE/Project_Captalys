<h1>Acesso negado!</h1>
<?php if (isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>
    <h4>A pagina solicitada não ser acessada nesta sessão.</h4>
    <hr />
    <br />
    <div>
        <a href="../../Controllers/usuarioLogoff.php">Fazer LogOff</a>
        <a href="_Layout.php?CodPg=5">Voltar a Home</a>
    </div>
<?php } else { ?>
    <h4>A pagina solicitada não ser acessada sem estar logado!</h4>
    <hr />
    <br />
    <div>
        <a href="_Layout.php?CodPg=3">Fazer Login</a>
        <a href="_Layout.php">Voltar a Home</a>
    </div>
<?php } ?>