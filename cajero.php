<?php

class Cajero {
    protected $saldo;

    public function __construct($saldo_inicial){
        $this->saldo = $saldo_inicial;
    }

    public function consultarSaldo(){
        return $this->saldo;
    }
}
?>
