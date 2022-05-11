<?php

class Carrinho
{
    private $id;
    private $idProduto;
    private $idCliente;
    private $quantidade;

    /**
     * @param $id
     * @param $idProduto
     * @param $idCliente
     * @param $quantidade
     */
    public function __construct($id, $idProduto, $idCliente, $quantidade)
    {
        $this->id = $id;
        $this->idProduto = $idProduto;
        $this->idCliente = $idCliente;
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * @param mixed $idProduto
     */
    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }





}