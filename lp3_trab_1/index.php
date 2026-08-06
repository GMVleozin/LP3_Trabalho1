<?php

require_once "Produto.php";
require_once "ItemPedido.php";
require_once "Pedido.php";
require_once "Cliente.php";
require_once "Vendedor.php";
require_once "Data.php";

echo "<pre>";

$cli1 = new Cliente("Maria", "123.456.789-10", "Feminino", new Data(05, 05, 2005), "Gosto de chocolate");

$cli1->imprimir();

$vend1 = new Vendedor("Anna Clara", "987.654.231-10", "Feminino", new Data(10, 10, 2000), 3450, 10);

$vend1->imprimir();

$prod1 = new Produto(1, "Barra de chocolate", 12.98);
$prod1->imprimir();

$prod2 = new Produto(2, "Refrigerante de Cola 1L", 9.50);
$prod2->imprimir();

$prod3 = new Produto(3, "Salgadinho de milho", 13.49);
$prod3->imprimir();

$ped1 = new Pedido($cli1, $vend1, $prod1, 1);
$ped1->adicionarItem($prod2, 1);
$ped1->adicionarItem($prod3, 2);
$ped1->fecharPedido();
$ped1->imprimirPedidoCompleto();


