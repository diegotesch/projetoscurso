<?php
require './classes/Purchase.class.php';

$compra = new Purchase($order, $billing, $shipping);
$compra->finish();