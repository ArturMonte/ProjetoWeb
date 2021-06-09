<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/Cliente.php");
    include("classes/DB.php");

    $add = new pagemento();
    $add->settipo($_POST['tipo']);
    $add->setvalor($_POST['valor']);
    $add->adicionar();   

}
?>


<h1>ADICIONAR pagamento</h1>

<form method="post" action="">
Tipo do pagamento: <input type='text' name='tipo'> <br/>
Valor do pagamento: <input type='text' name='valor'><br/>
<input type='submit' name='botao' value="Salvar">
</form>
