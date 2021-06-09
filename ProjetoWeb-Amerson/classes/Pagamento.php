<?php

class Pagamento
{
     var $tipo;
     var $valor;

    public function __construct($id = false)
    {
        if ($id) {
            $sql = "SELECT * FROM pagamento where id = :id";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            foreach ($stmt as $registro) {
                $this->setId($registro['id']);
                $this->settipo($registro['tipo']);
                $this->setvalor($registro['valor']);
            }
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function settipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setvalor($valor)
    {
        $this->valor = $valor;
    }

    public function gettipo()
    {
        return $this->tipo;
    }

    public function getvalor()
    {
        return $this->valor;
    }

    public static function listar()
    {
        $sql = "SELECT * FROM pagamento";
        $stmt = DB::conexao()->prepare($sql);
        $stmt->execute();
        $registros = $stmt->fetchAll();
        if ($registros) {
            $itens = array();
            foreach ($registros as $registro) {
                $temporario = new Cliente();
                $temporario->setId($registro['id']);
                $temporario->settipo($registro['tipo']);
                $temporario->setvalor($registro['valor']);
                $itens[] = $temporario;
            }
            return $itens;
        }
        return false;
    }

    public function adicionar()
    {

        $sql = "INSERT INTO pagamento(tipo, valor) VALUES (:tipo, :valor)";

        try {
            $stmt = DB::conexao()->prepare($sql);
            $stmt->bindParam(':tipo', $this->tipo);
            $stmt->bindParam(':valor', $this->valor);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }


}
