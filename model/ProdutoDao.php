<?php
require_once 'Database.php';


class ProdutoDAO{
    private $conexao;

    function __construct(){
        $Database = new Database;
        $this->conexao = $Database->getConexao();
    }

    function store($produto){
        $stmt = $this->conexao->prepare("INSERT INTO produtos (nome, descricao, preco, caminho_imagem, categoria_id, quantidade,ncm) VALUES (:nome, :descricao, :preco, :caminho_imagem, :categoria_id, :quantidade, :ncm);");
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':preco', $produto->getPreco());
        $stmt->bindValue(':caminho_imagem', $produto->getCaminho_imagem());
        $stmt->bindValue(':categoria_id', $produto->getCategorias());
        $stmt->bindValue(':quantidade', $produto->getQuantidade());
        $stmt->bindValue(':ncm', $produto->getNcm());

        return $stmt->execute();
    }
}