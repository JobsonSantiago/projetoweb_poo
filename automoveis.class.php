<?php
// classe com nome automoveis
class Automoveis {
    //objetos com visibilidade privada
    private $tipo;
    private $cor;
    private $placa;
    private $numerodeportas;

    //metodo de captura do valor do objeto
    public function getTipo() {
        return $this->tipo;
    }

    // metodo de alteração de valor de objeto
    public function setTipo($tipo) {
        $this->tipo = $tipo; 
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor; 
    }
    
    public function getPlaca() {
        return $this->placa;
    }

    public function setplaca($placa) {
        $this->placa = $placa; 
    }

    public function getNumerodeportas() {
        return $this->numerodeportas;
    }

    public function setNumerodeportas($numerodeportas) {
        $this->numerodeportas = $numerodeportas; 
    }
   
}


?>