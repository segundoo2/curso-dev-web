<?php 

class Numero {
    //propriedades
    private $numero;

    //métodos
    public function __construct($n)
    {
        $this->numero = $n;   
    }

    public function get_Numero()
    {
        return $this->numero;

    }

    public function par_Impar()
    {
        return $this->numero % 2 == 0 ? 'Número par': 'número impar';
    }

    public function tabuada() 
    {
        $resultados = [];

        for ($i = 1; $i <= 10; $i++) 
        {
            $resultados[] = "{$this->numero} x $i = " . ($this->numero * $i);
        }
        
        return $resultados;
    }

    public function raiz_Quadrada() 
    {
        return sqrt($this->numero);
    }
}  


?>