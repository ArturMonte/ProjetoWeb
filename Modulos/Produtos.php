<html>
    <body>
    
    <?php     
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $preco =  $_POST["preco"];
        $quantidadeEstoque =  $_POST["QuantidadenoEstoque"];                 
        ?>

        <h2>
        Nome: <?php echo $nome; ?> <br/>       
        Tipo: <?php echo $tipo; ?><br/>
        Preço: <?php echo $preco; ?> <br/> 
        Quantidade no estoque: <?php echo $quantidadeEstoque; ?>  
        </h2>

        <h1> Produtos </h1>
        <p> Modulo de cadastro dos produtos  </p>
        <h2> Lista </h2>
        <table>
            <tr>
                <th> CodigoDoProduto </th>
                <th> Nome </th>
                <th> Classificacao </th>
                <th> Tipo </th>
                <th> Ano  </th>
                <th> Status </th>
                <th> Preço </th>
                <th> Quantidade no Estoque </th>
            </tr>
            <tr>
                <td> 01 </td>
                <td> A noite dos mortos </td>
                <td> 18 Anos  </td>
                <td> Terror </td>
                <td> 1998 </td>
                <th> Disponivel </th>
                <th> 12,00</th>
                <th> 2 </th>
            </tr>
            <tr>
                <td> 02 </td>
                <td> Busca Implacavel </td>
                <td> 16 Anos  </td>
                <td> Acao </td>
                <td> 1999 </td>
                <th> Alugado </th>
                <th> 12,00</th>
                <th> 0 </th>
            </tr>
            <tr>
                <td> 03 </td>
                <td> 60 seconds </td>
                <td> Livre </td>
                <td> Acao </td>
                <td> 2000 </td>
                <th> Alugado </th>
                <th> 12,00</th>
                <th> 0 </th>
            </tr>
            <tr>
                <td> 04 </td>
                <td> Dois doidoes em Havard </td>
                <td> 12 Anos </td>
                <td> comedia </td>
                <td> 2001 </td>
                <th> Disponivel </th>
                <th> 12,00</th>
                <th> 0 </th>
            </tr>
            <tr>
                <td> 05 </td>
                <td> Numero 23 </td>
                <td> 16 Anos  </td>
                <td> Misterio/Terror </td>
                <td> 2002 </td>
                <th> Alugado </th>
                <th> 12,00</th>
                <th> 0 </th>
            </tr>
            
        </table>
        <h2> Formulario </h2>
        <form method = "post">
        Nome:  <input type = "text" name = "nome" size = 32 maxlenght = 20/>
        <br/>      
        Tipo: <Select name = "tipo">
            <option value = "Terror"> Terror </option>
            <option value = "Comedia"> comedia </option> 
            <option value = "Ação"> ação </option>          
        </Select>
        <br/>
        Preço: <input type = "text" name = "preco" size = 2 maxlenght = 2/>
        <br/>
        Quantidade no estoque: <input type = "text" name = "QuantidadenoEstoque" size = 1 maxlenght = 1/>        
        <br/>
        <br/>
        <input type = "submit" name = "botaoEnviar" value = "Cadastrar"/> 
        

        </form>
    </body>
</html>