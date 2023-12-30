<?php
require_once "cajero.php";
require_once "transferencia.php";
require_once "retiro.php";

$cajeroPrincipal = new Cajero(1000);
echo "Saldo inicial: " . $cajeroPrincipal->consultarSaldo() . "<br>" . "<br>";

$cajeroTransferencia = new Transferencia(1000);
echo $cajeroTransferencia->realizarTransferencia(500, 'Haru') . "<br>";

$cajeroRetirar = new Retiro(500);
echo $cajeroRetirar->retirarDinero(200) . "<br>";  
?>