<?php
class PersegiPanjang {
    // Buat Properti
    private $panjang;
    private $lebar;
    // Methode
    function __construct($pp, $lbr){
        $this ->panjang = $pp;
        $this ->lebar = $lbr;
    }

    function getLuas(){
        return $this ->panjang * $this ->lebar;
    }
    function getKeliling(){
        return 2* $this ->panjang * $this ->lebar;
    }
}
?>