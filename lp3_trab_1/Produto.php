<?php

class Produto
{
    private int $codigo;
    private string $nome;
    private float $valor;

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function __construct($codigo, $nome, $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function __toString()
    {
        return "Código: $this->codigo<br>Nome: $this->nome<br>Valor unitário: $this->valor";
    }

    public function imprimir()
    {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nome do produto: " . $this->nome . "<br>";
        echo "Valor: " . number_format($this->valor, 2, ",", ".") . "<br><br>";
    }
}
