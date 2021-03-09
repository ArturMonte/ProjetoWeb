<html>
    <body>
        <?php
        $Array = array();
        $Array[] = array("codigoDoCliente" => 0, "email" => 'artur@gmail.com', "senha" => "aasdas", "cep" => "99999-999", "telefone" => "99999-9999");
        $Array[] = array("codigoDoCliente" => 1, "email" => 'rodrigo@gmail.com', "senha" => "aasda1", "cep" => "99999-998", "telefone" => "99999-9998");
        $Array[] = array("codigoDoCliente" => 2, "email" => 'john@gmail.com', "senha" => "aasda2", "cep" => "99999-997", "telefone" => "99999-9997");
        $Array[] = array("codigoDoCliente" => 3, "email" => 'roberto@gmail.com', "senha" => "aasda3", "cep" => "99999-996", "telefone" => "99999-9996");
        $Array[] = array("codigoDoCliente" => 4, "email" => 'lucas@gmail.com', "senha" => "aasda4", "cep" => "99999-995", "telefone" => "99999-9995");
        
        
        
        echo "<pre>";
        print_r($Array);
        echo "</pre>";
        ?>

        <table>
            <tr>
                <th> CodigoDoCliente </th>
                <th> Email </th>
                <th> Endereco </th>
                <th> CEP </th>
                <th> Telefone </th>
            </tr>
            <?php
            foreach($Array as $teste){
            ?>
            <tr>
                <td> <?php echo $teste["codigoDoCliente"] ?> </td>
                <td> <?php echo $teste["email"] ?> </td>
                <td> <?php echo $teste["senha"] ?> </td>
                <td> <?php echo $teste["cep"] ?> </td>
                <td> <?php echo $teste["telefone"] ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>