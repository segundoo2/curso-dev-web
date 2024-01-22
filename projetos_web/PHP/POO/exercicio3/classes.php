<?php

abstract class Veiculos
{
    protected $tipo;
    protected $marca;
    protected $ano;

    public function __construct($dados)
    {
        $this->tipo = $dados[0];
        $this->marca = $dados[1];
        $this->ano = $dados[2];
    }

    public function get_Tipo()
    {
        return $this->tipo;
    }
}

class Automovel extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda um automovel da marca {$this->marca} e do ano {$this->ano}";
    }
}

class Barco extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda um barco da marca {$this->marca} e do ano {$this->ano}";
    }
}

class Aviao extends Veiculos
{
    public function apresentar()
    {
        return "Este objeto guarda um avião da marca {$this->marca} e do ano {$this->ano}";
    }
}
