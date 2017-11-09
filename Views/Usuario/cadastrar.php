<!-- Exibe mensagem, se houver uma -->
<?php if (isset($_SESSION["mensagem"]) && $_SESSION["mensagem"] != null) { ?>
    <script type="text/javascript">
        alert(<?=$_SESSION["mensagem"];?>);
    </script>
<?php } ?>

<!-- Titulo -->
<hgroup class="title" style="margin-top: 20px; margin-bottom: -7px;">
    <h2 style="margin-left: -1px;">Pagina de cadastro</h2>
</hgroup>
<p><h5 class="text-muted">Faça seu cadastro e aproveite cada segundo!</h5></p>
<hr style="width: 110%;margin-left: -10px; margin-top: -5px;" />

<!-- Formulario de cadastro -->
<form action="../../Controllers/usuarioCadastra.php" method="post" name="formCadastra">
    <fieldset>
        <legend>Crie sua conta!</legend>
        <ol>
            <li class="email">
                <label id="lbl_user_login" for="email">Seu novo login</label>
                <input type="text" id="user_login" name="user_login" class="form-control" style="width: 105%;" placeholder="Login. ex: gibimba" />
            </li>
            <br>
            <li class="password">
                <label id="lbl_user_senha" for="password">Sua nova senha</label>
                <input type="password" id="user_senha" name="user_senha" class="form-control" style="width: 105%;" placeholder="Senha. ex: 123456" />
            </li>
        </ol>
        <br />
        <center>
            <input type="submit" class="btn btn-outline-success" style="width: 25%;" value="Cadastrar" />
        </center>
    </fieldset>
</form>