<h1>Pagina não encontrada!</h1>
<h4>A pagina solicitada não se encontra disponivel no momento.</h4>
<hr />
<br />
<?php if (isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>
    <a href="_Layout.php?CodPg=5">Voltar a Home</a>
<?php } else { ?>
    <a href="_Layout.php">Voltar a Home</a>
<?php } ?>
