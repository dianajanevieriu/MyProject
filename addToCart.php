<?php
include "functions.php";
$productId = $_GET['id'];
$cart = getCurrentCart();
$cart->add($productId);
header('Location:product.php');
