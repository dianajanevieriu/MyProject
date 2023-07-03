<?php
include "functions.php";
$id= $_GET['id'];

delete('cart_items',$id);
header('Location: cart.php');