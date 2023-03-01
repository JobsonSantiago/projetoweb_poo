<?php
//importação
require_once ("automoveis.class.php");

class Carros {

    public function __construct(){
        //objeto chamado porsche que recebe a classe Automoveis()
        $porsche = new Automoveis();

        // Passar um valor para o método setTipo
        $porsche->setTipo("<b>Tipo:</b> Porsche </br>");
        //imprimir um valor do metodo getTipo
        echo $porsche->getTipo();

        // Passar um valor para o método setCor
        $porsche->setCor("<b>Cor:</b> Cinza </br>");
        //imprimir um valor do metodo getCor
        echo $porsche->getCor();

        // Passar um valor para o método setPlaca
        $porsche->setPlaca("<b>Placa:</b> MHZ-4345 </br>");
        //imprimir um valor do metodo getPlaca
        echo $porsche->getPlaca();

        // Passar um valor para o método setNumerodeportas
        $porsche->setNumerodeportas("<b>Número de Portas:</b> 2 </br> </br>");
        //imprimir um valor do metodo getNumerodeportas
        echo $porsche->getNumerodeportas();

        $ferrari = new Automoveis();
        // Passar um valor para o método setTipo
        $ferrari->setTipo("<b>Tipo:</b> Ferrari </br>");
        //imprimir um valor do metodo getTipo
        echo $ferrari->getTipo();

        // Passar um valor para o método setCor
        $ferrari->setCor("<b>Cor:</b> Vermelho </br>");
        //imprimir um valor do metodo getCor
        echo $ferrari->getCor();

        // Passar um valor para o método setPlaca
        $ferrari->setPlaca("<b>Placa:</b> JKL-0001 </br>");
        //imprimir um valor do metodo getPlaca
        echo $ferrari->getPlaca();
        
        // Passar um valor para o método setNumerodeportas
        $ferrari->setNumerodeportas("<b>Número de Portas:</b> 4 </br>");
        //imprimir um valor do metodo getNumerodeportas
        echo $ferrari->getNumerodeportas();

    }
     //instancia
}new Carros ();


?>