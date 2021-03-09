<html>
    <body>

    <?php     
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cep =  $_POST["CEP"];      
        ?>

        <h2>
        Email: <?php echo $email; ?> <br/> 
        Senha: <?php echo $senha; ?>  <br/>
        Cep: <?php echo $cep; ?>   
        </h2>
        
        <h1> Cliente </h1>
        <p> Modulo de cadastro dos clientes  </p>
        <h2> Lista </h2>
        <table>
            <tr>
                <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <tr>
                <td> 0 </td>
                <td> artur@gmail.com </td>
                <td> Santos Dumont  210 </td>
                <td> 68903-789 </td>
                <td> 99999-9999 </td>
            </tr>
            <tr>
                <td> 1 </td>
                <td> monte@gmail.com </td>
                <td> Rua jovino 101  </td>
                <td> 68903-790 </td>
                <td> 99999-9998 </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> valle@gmail.com </td>
                <td> Rua leopoldo 102 </td>
                <td> 68903-791 </td>
                <td> 99999-9997 </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td> rodrigo@gmail.com </td>
                <td> Rua Hamilton 103 </td>
                <td> 68903-792 </td>
                <td> 99999-9996 </td>
            </tr>
            <tr>
                <td> 4 </td>
                <td> John@gmail.com </td>
                <td> Av.Cora de Carvalho 105 </td>
                <td> 68903-793 </td>
                <td> 99999-9995 </td>
            </tr>
            
        </table>
        <h2> Formulario </h2>
        <form>
        Email: <input type = "text" name = "email" size = 32 maxlenght = 20/>
        <br/>
        Senha: <input type = "password" name = "senha" size = 32 maxlenght = 10/>
        <br/>
        CEP:     <input type = "text" name = "CEP" size = 32 maxlenght = 20/>
        <br/>
        <br/>
        Você é um robo? <input type = "Radio" name = "resposta" value = "True"/> Sim <input type = "Radio" name = "resposta" value = "False"/> Não
       
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
    </body>
</html>