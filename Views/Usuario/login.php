<hgroup class="title">
    <h1 style="margin-left: -1px;">Login</h1>
</hgroup>

<section id="loginForm">
    <h6 class="text-muted">Entre para ter acesso a diversas ferramentas.</h6>
    <hr style="width: 95%;margin-left: -30px; margin-top: -5px;" />
    <form action="../../Controllers/usuarioLogin.php" method="post" name="formLogin">
        <fieldset>
            <legend>Log in to Your Account</legend>
            <ol>
                <li class="email">
                    <label id="lbl_user_login" for="email">Login</label>
                    <input type="text" id="user_login" name="user_login" class="form-control" style="width: 90%;" placeholder="Login. ex: gibimba" maxlength="32" required/>
                </li>
                <br>
                <li class="password">
                    <label id="lbl_user_senha" for="password">Senha</label>
                    <input type="password" id="user_senha" name="user_senha" class="form-control" style="width: 90%;" placeholder="Senha. ex: 123456" maxlength="16" required/>
                </li>
                <p><a href="../Shared/_Layout.php?CodPg=6">Esqueceu a senha?</a></p>

                <li class="form-check">
                    <input class="checkbox" type="checkbox" id="contact-accept" name="contact-accept" />
                    <label class="checkbox" for="contact-accept">Aceito <b>informar um feedback após a avaliação</b> em prol da melhoria deste desenvolvedor.</label>
                </li>
                <li class="form-check">
                    <input type="checkbox" id="rememberMe" name="rememberMe" value="true" />
                    <label class="checkbox" for="lembrarMe">Lembrar-me?</label>
                </li>
            </ol>
            <center>
                <input type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: -10%;" value="Entrar" />
            </center>
        </fieldset>
    </form>
</section>

<section class="social" id="socialLoginForm" style="margin-top: -8.45%;">
    <div style="margin-top: 40%;">
        <center>
            <hgroup class="title">
                <h2>Não tem cadastro?</h2>
            </hgroup>
            <h5>Faça agora mesmo!</h5>
            <br />
            <div style="margin-left: 12%; margin-top: -5%;">
                <a href="../Shared/_Layout.php?CodPg=4" >
                    <input type="button" class="btn btn-success" style="width: 50%; margin-left: -10%;" value="Realizar Cadastro" />
                </a>
            </div>
        </center>
    </div>
</section>