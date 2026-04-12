<?php


require_once 'Produto.php';


$produto = new Produto("Tv", 1800.00, 2);


$produto->mostrarDados();


$valorEstoque = $produto->calcularValorEstoque();
echo "Valor em estoque: R$ " . number_format($valorEstoque, 2, ',', '.') . "<br>";

?>