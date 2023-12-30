<?php
class Retiro extends Cajero{
    public function __construct($saldo_inicial){
        parent::__construct($saldo_inicial);
    }

    public function retirarDinero($cantidad){
        if ($cantidad > 0 && $cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
            return "Retiro exitoso.<br> Nuevo saldo: {$this->saldo}";
        } else {
            return "Fondos insuficientes o cantidad de retiro inválida.";
        }
    }
}
?>