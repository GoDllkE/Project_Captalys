<h1>Pagina não encontrada!</h1>
<h4> A pagina solicitada não se encontra disponivel no momento.</h4>
<hr />
<p> Parece que você está tentando acessar uma pagina que não existe ou está em processo
    de manutenção...
<br />Recomendamos as seguintes ações:</p>
<br />
<center>
<?php if (isset($_SESSION["statusLogin"]) && $_SESSION["statusLogin"] == 1) { ?>    
    <a class="btn btn-outline-primary" style="width: 20%;" href="_Layout.php?CodPg=5">Voltar para Home</a>
<?php } else { ?>
    <a class="btn btn-outline-primary" style="width: 20%;" href="_Layout.php">Voltar para Home</a>
<?php } ?>
</center>