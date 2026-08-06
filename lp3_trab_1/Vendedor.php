<?php

require_once "Pessoa.php";

class Vendedor extends Pessoa
{
    private float $salario;
    private float $comissao;

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }

    public function getComissao()
    {
        return $this->comissao;
    }

    public function __construct($nome, $cpf, $sexo, Data $dataNascimento, $salario, $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }

    public function imprimir()
    {
        echo "VENDEDOR:<br>";
        parent::imprimir();
        echo "Salário: " . number_format($this->salario, 2, ",", ".") . "<br>";
        echo "Comissão: " . $this->comissao . "%<br><br>";
    }
}
