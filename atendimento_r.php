<html>
<body>
    <div class="common">
    <br><h1>Mensagem concluída!</h1>
    <br>
        <p style="color:red">Mensagem não enviada. Formulário indisponível.</p>
        <h1 align="center" style="color:rgb(75, 0, 117)">Registro do formulário.<br></h1>
        <button onclick="location.href='form03.html'">Retornar</button>
        <b>Nome: </b><?php echo $_POST["frm_nom"]; ?><br>
        <b>Telefone: </b><?php echo $_POST["frm_tel"]; ?><br>
        <b>Email: </b><?php echo $_POST["frm_mai"]; ?><br>
        <b>Mensagem: </b><?php echo $_POST["frm_msg"]; ?><br>
    </div>
</body>
</html>