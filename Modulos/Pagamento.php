<html>
    <body>
    <?php     
        $TipoDePagamento =  $_POST["pagamento"]; 
        $codProduto =  $_POST["codProduto"];             
        ?>
        <h2>   
        Tipo de Pagamento: <?php echo $TipoDePagamento; ?><br/>
        Codigo do produto(s): <?php echo $codProduto; ?>  
        </h2>
                  

        <h1> Pagamento </h1>
        <p> Modulo dos produtos com o valor e forma de pagamento. </p>
        <h2> Lista </h2>
        <table>
            <tr>
                <th> CodigoDoProduto </th>
                <th> Nome </th>
                <th> Classificacao </th>
                <th> Tipo </th>
                <th> Ano  </th>
                <th> Valor </th>
                <th> Tipo de Pagamento </th>
            </tr>
            <tr>
                <td> 01 </td>
                <td> A noite dos mortos </td>
                <td> 18 Anos  </td>
                <td> Terror </td>
                <td> 1998 </td>
                <th> R$ 12,00 </th>
                <th> Cartao de debito</th>

            </tr>
            <tr>
                <td> 02 </td>
                <td> Busca Implacavel </td>
                <td> 16 Anos  </td>
                <td> Acao </td>
                <td> 1999 </td>
                <th> R$ 14,00 </th>
                <th> Dinheiro </th>
            </tr>
            <tr>
                <td> 03 </td>
                <td> 60 seconds </td>
                <td> Livre </td>
                <td> Acao </td>
                <td> 2000 </td>
                <th> R$ 16,00 </th>
                <th> Dinheiro </th>
            </tr>
            <tr>
                <td> 04 </td>
                <td> Dois doidoes em Havard </td>
                <td> 12 Anos </td>
                <td> comedia </td>
                <td> 2001 </td>
                <th> R$ 18,00 </th>
                <th> Cartao de debito </th>
            </tr>
            <tr>
                <td> 05 </td>
                <td> Numero 23 </td>
                <td> 16 Anos  </td>
                <td> Misterio/Terror </td>
                <td> 2002 </td>
                <th> R$ 20,00 </th>
                <th> Cartao de credito </th>
            </tr>
            
        </table>
        <h2> Formulario </h2>
        <form method = "post">    
        Metodo de pagamento: <Select name = "pagamento">
            <option value = "Cartão de credito"> cartao de credito </option>
            <option value = "Cartão de debito"> cartao de debito </option> 
            <option value = "Dinheiro"> dinheiro </option>          
        </Select>
        <br/>
        <br/>
        <br/>
        <br/>
        Codigo do produto(s): <input type = "text" name = "codProduto" size = 5 maxlenght = 5/>
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        <h2> ReadyCheck </h2>
        <form>
        
        Você é um robo? <input type = "Radio" name = "resposta" value = "True"/> Sim <input type = "Radio" name = "resposta" value = "False"/> Não
        <br/>      
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
    </body>
</html>