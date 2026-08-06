<?php

abstract class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function __construct($nome, $cpf, $sexo, Data $dataNascimento)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }

    public function imprimir()
    {
        echo "Nome: " . $this->getNome() . "<br>";
        echo "CPF: " . $this->getCpf() . "<br>";
        echo "Gênero: " . $this->getSexo() . "<br>";
        echo "Data de nascimento: " . $this->getDataNascimento();
    }
}
