<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/Cliente.php");
    include("classes/DB.php");

    $add = new Cliente();
    $add->setNome($_POST['nome']);
    $add->setEmail($_POST['email']);
    $add->adicionar();   

}
?>


<h1>ADICIONAR CLIENTE</h1>

<form method="post" action="">
Nome do Cliente: <input type='text' name='nome'> <br/>
Email do Cliente: <input type='text' name='email'><br/>
<input type='submit' name='botao' value="Salvar">
</form>
