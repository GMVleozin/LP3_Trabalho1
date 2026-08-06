<?php

class Data
{
    private int $dia;
    private int $mes;
    private int $ano;

    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    public function getMes()
    {
        return $this->mes;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function __construct($dia, $mes, $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function __toString()
    {
        return "$this->dia/$this->mes/$this->ano.<br>";
    }

    public function imprimirDataBanco()
    {
        echo date("d-M-Y") . "<br>";
    }
}
