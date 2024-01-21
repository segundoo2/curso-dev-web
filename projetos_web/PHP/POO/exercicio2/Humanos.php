<?php 
class Humanos {
    private $masculinos = [];
    private $femininos = [];
    private $desconhecidos = [];

    public function definir($sexo, $nome) {
        if (strtoupper($sexo) == 'M') {
            $this->masculinos[] = $nome;
        } else if (strtoupper($sexo) == 'F') {
            $this->femininos[] = $nome;
        } else {
            $this->desconhecidos[] = $nome;
        }
    }
    public function get_Masculinos() {
        return $this->masculinos;
    }

    public function get_Femininos() {
        return $this->femininos;
    }

    public function get_Desconhecidos() {
        return $this->desconhecidos;
    }
}

?>