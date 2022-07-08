<?php
    class persegipanjang{
        private $panjang;
        private $lebar;
        function __construct ($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        function getluas(){
           return $this->panjang * $this->lebar;
        }
        function getkeliling(){
            return 2 * $this->panjang * $this->lebar;
        }
    }
    $persegipanjang1 = new persegipanjang(20, 4);
    $persegipanjang2 = new persegipanjang(15, 6);
    echo "<br/> Persegi Panjang 1 Mempunyai P = 20 L = 4";
    echo "<br/> Persegi Panjang 2 Mempunyai P = 15 L = 6";
    echo "<br/> Luas Persegi Panjang 1 =" . $persegipanjang1->getluas() ;
    echo "<br/> Luas Persegi Panjang 2 =" . $persegipanjang1->getluas() ;
    echo "<br/> Keliling Persegi Panjang 1 =" . $persegipanjang1->getkeliling() ;
    echo "<br/> Keliling Persegi Panjang 2 =" . $persegipanjang1->getkeliling() ;

?>