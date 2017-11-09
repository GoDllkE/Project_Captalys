<h1>Acesso negado!</h1>
<?php if (isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>
    <h4>A pagina solicitada não ser acessada nesta sessão.</h4>
    <hr />
    <br />
    <div>
        <a class="btn btn-outline-danger" href="../../Controllers/usuarioLogoff.php">Fazer LogOff</a>
        <a class="btn btn-outline-primary" href="_Layout.php?CodPg=5">Voltar a Home</a>
    </div>
<?php } else { ?>
    <h4>A pagina solicitada não ser acessada sem estar logado!</h4>
    <hr />
    <p>Parece que você não tem as permissoes ou requisitos para acessar está pagina.
    <br />Recomendamos as seguintes ações:</p>
    <br />
    <div>
        <center>
        <a class="btn btn-outline-success" style="width: 15%;" href="_Layout.php?CodPg=3">Fazer Login</a>
        <a class="btn btn-outline-primary" style="width: 15%;" href="_Layout.php">Voltar a Home</a>
        </center>
    </div>
<?php } ?>