<?php

class Compras
{
    private $id;
    private $idCarrinho;
    private $valorTotal;
    private $formaPagamento;

    /**
     * @param $id
     * @param $idCarrinho
     * @param $valorTotal
     * @param $formaPagamento
     */
    public function __construct($id, $idCarrinho, $valorTotal, $formaPagamento)
    {
        $this->id = $id;
        $this->idCarrinho = $idCarrinho;
        $this->valorTotal = $valorTotal;
        $this->formaPagamento = $formaPagamento;
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
    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }

    /**
     * @param mixed $idCarrinho
     */
    public function setIdCarrinho($idCarrinho)
    {
        $this->idCarrinho = $idCarrinho;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * @param mixed $valorTotal
     */
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    /**
     * @return mixed
     */
    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    }

    /**
     * @param mixed $formaPagamento
     */
    public function setFormaPagamento($formaPagamento)
    {
        $this->formaPagamento = $formaPagamento;
    }






}