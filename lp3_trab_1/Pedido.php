<?php

class Pedido
{
    private Data $data;
    private array $listaItens = [];
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal = 0;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setItemPedido($ItemPedido)
    {
        $this->listaItens = $ItemPedido;
    }

    public function getItemPedido()
    {
        return $this->listaItens;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;
    }

    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function __construct(Cliente $cliente, Vendedor $vendedor,  Produto $produto, int $quantidade)
    {
        $this->data = new Data(date("d"), date("m"), date("Y"));
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->listaItens[] = new ItemPedido($produto, $quantidade);
    }

    public function adicionarItem($item, $quantidade)
    {
        $this->listaItens[] = new ItemPedido($item, $quantidade);
        echo "Item '" . $item->getNome() . "' adicionado!<br><br>";
    }

    private function calcularValorTotal()
    {
        foreach ($this->listaItens as $item) {
            $this->valorTotal += ($item->getValor() * $item->getQuantidade());
        }

        return $this->valorTotal;
    }

    private function adicionarComissao()
    {
        return $this->valorTotal += $this->calcularValorTotal() * ($this->vendedor->getComissao() / 100);
    }

    public function fecharPedido()
    {
        $this->adicionarComissao();
        echo "Pedido fechado!<br><br>";
    }

    public function imprimirPedidoCompleto()
    {
        echo "Vendedor: " . $this->vendedor->getNome() . "<br>";

        echo "Cliente: " . $this->cliente->getNome() . "<br>";

        echo "Lista de Item(ns): <br>";

        foreach ($this->listaItens as $item) {
            echo $item . "<br>";
        }

        echo "Valor total do pedido: R$" . number_format($this->valorTotal, 2, ",", ".") . "<br><br>";
    }
}
