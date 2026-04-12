<?php


require_once 'Pedido.php';


$pedido = new Pedido("Augusto", "X-tudo", 1, 30.00);


$pedido->mostrarResumo();


$total = $pedido->calcularTotal();
echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";

?>