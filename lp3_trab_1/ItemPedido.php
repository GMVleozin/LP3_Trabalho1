<?php

class ItemPedido
{
    private Produto $item;
    private int $quantidade = 0;
    private float $valor;

    public function setItem($item)
    {
        $this->item = $item;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function __toString()
    {
        return "$this->item<br>Quantidade: $this->quantidade<br>";
    }

    public function __construct(Produto $produto, int $quantidade)
    {
        $this->item = $produto;
        $this->quantidade = $quantidade;
        $this->valor = $produto->getValor();
    }
}
