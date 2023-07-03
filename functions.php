<?php

use Classes\Cart;
use Classes\User;

session_start();
include "Classes/Base.php";
include "Classes/Product.php";
include "Classes/Image.php";
include "Classes/SubCategory.php";
include "Classes/MainCategory.php";
include "Classes/Cart.php";
include "Classes/CartItem.php";
include "Classes/User.php";
include "Classes/Address.php";
include "Classes/Subscriber.php";
include "Classes/Order.php";
include "Classes/OrderItem.php";

$connection = mysqli_connect('45.15.23.59','root', 'Sco@l@it123','national-04-diana-finalProject');
mysqli_set_charset ($connection, "utf8");

function query($sql){
    global $connection;
    $query = mysqli_query($connection,$sql);
    if(is_bool($query)) {
        return $query;
    } else {
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
}

function getCurrentCart(){
    if(isset($_SESSION['cartId'])) {

        return new Cart($_SESSION['cartId']);
    } else {
        $cart = new Cart();
        $cart->userId=0;
        $cart->save();
        $_SESSION['cartId'] = $cart->getId();
        return $cart;
    }
}

function formatNumber($number) {
    return number_format((float)$number, 2, '.', '');
}

function getAuthUser()
{
    if (isset($_SESSION['userId'])) {
        return new User($_SESSION['userId']);
    } else {
        return false;
    }
}

//function getAuthUser()
//{
//    if (isset($_SESSION['authUser'])) {
//        return $_SESSION['authUser'];
//    } else {
//        return false;
//    }
//}

//$salt = '1009';