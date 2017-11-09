<div style="margin-left: -100px;">
    <h1>Bem vindo <i><?=$_SESSION["login"]?></i>!</h1>
    <h4 class="text-muted"> Esta é sua pagina incial.</h4>
    <hr />
    <p> 
        Aqui você pode conferir gráficos do status atual do banco de dados!
        <br /> Dê uma olhada:
    </p>
    <br />    
</div>
<fieldset>
        <div class="row">
            <div class="col-4 grafico" style="margin-left: -100px;">
                <img class="imagem-grafico" src="../Consulta/Grafico1.php" />
            </div>
            <div class="col-4 grafico">
                <img class="imagem-grafico" src="../Consulta/Grafico2.php" />
            </div>
            <div class="col-4 grafico">
                <img class="imagem-grafico" src="../Consulta/Grafico3.php" />
            </div>
        </div>
</fieldset>