<?php

require_once "Pessoa.php";

class Cliente extends Pessoa
{
    private Data $dataCadastro;
    private string $preferencias;

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }

    public function getPreferencias()
    {
        return $this->preferencias;
    }

    public function __construct($nome, $cpf, $sexo, Data $dataNascimento, $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->dataCadastro = new Data(date("d"), date("m"), date("Y"));
        $this->preferencias = $preferencias;
    }

    public function imprimir()
    {
        echo "CLIENTE:<br>";
        parent::imprimir();
        echo "Data de cadastro: " . $this->dataCadastro;
        echo "Preferências: " . $this->preferencias . "<br><br>";
    }
}
