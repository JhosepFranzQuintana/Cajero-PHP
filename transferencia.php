<?php
class Transferencia extends Cajero{
    public function __construct($saldo_inicial){
        parent::__construct($saldo_inicial);
    }

    public function realizarTransferencia($cantidad, $cuenta_destino) {
        if ($cantidad > 0 && $cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
            return "Transferencia exitosa.<br> Nuevo saldo: {$this->saldo} <br>Transferencia a la cuenta: $cuenta_destino <br>";
        } else {
            return "Fondos insuficientes o cantidad de transferencia inválida.";
        }
    }
}
?>