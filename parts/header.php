<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7b8f161994.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Materiale textile</title>
    <link rel="icon" type="image/x-icon" href="./images/shopIcon.png"
</head>
<?php
include "functions.php";
?>
<body class="stretched has-plugin-flexslider has-plugin-easing has-plugin-bootstrap has-plugin-lightbox has-plugin-hoveranimation has-plugin-tabs has-plugin-counter has-plugin-form has-plugin-subscribeform device-md">
<div id="wrapper" class="clearfix">
    <div id="top-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-auto">
                    <p class="mb-0 py-2 text-center text-md-start"><strong><i class="fa-solid fa-phone"></i></strong> 0232-763-3330<span class="mx-3"></span><strong><i class="fa-solid fa-envelope"></i></strong> office@didishop.ro<span class="mx-3"></span><strong>Luni-Vineri:</strong> 10:00 - 18:00</p>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="top-links on-click">
                        <ul class="top-links-container">
                            <?php if (getAuthUser()): ?>
                                <?php echo getAuthUser()->firstName; ?>
                                <li class="top-links-item"><a href="logout.php">Logout</a></li>
                            <?php else: ?>
                                <li class="top-links-item"><a href="login.php">Login<i class="icon-angle-down"></i></a></li>
                                <li class="top-links-item"><a href="#"><i class="fa-solid fa-user-plus mt-1 me-2"></i>Înregistrare nouă<i class="icon-angle-down"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center my-3">
                <div class="col-12 col-md-auto">
                    <a href="index.php" class="standard-logo" data-dark-logo="images/shop.png"><img src="images/shop.png" alt="Didi Shop Logo" style="height: 80px;"></a>
                </div>
                <div class="col-12 col-md-auto">
                    <form class="input-group rounded mt-4" action="search.php" method="get" style="width: 500px">
                        <input type="search" name="search" class="form-control rounded" placeholder="Caută" aria-label="Search" aria-describedby="search-addon" />
                        <button class="input-group-text border-0" id="search-addon" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="header-misc">
                        <div id="top-search" class="header-misc-icon">
                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                        </div>
                        <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                            <a href="cart.php"><i class="fa-solid fa-basket-shopping fa-2xl"></i><span class="top-cart-number" style="top: -30px; right: -30px;"><?php //echo getCurrentCart()->getProductCount(); ?>5</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header id="header" class="">
        <div id="header-wrap" class="">
            <div class="container">
                <div class="header-row top-search-parent">
                    <nav class="primary-menu">
                        <ul class="menu-container">
                            <li class="menu-item current sub-menu"><a class="menu-link" href="index.php" style=""><div><i class="fa-solid fa-house-chimney"></i><i class="icon-angle-down"></i></div></a></li>
                            <li class="menu-item mega-menu sub-menu"><a class="menu-link" href="reviews.php" style=""><div>Părerea clienților<i class="icon-angle-down"></i></div></a></li>
                            <li class="menu-item mega-menu mega-menu-small sub-menu"><a class="menu-link" href="returnPolicy.php" style=""><div>Politica de retur<i class="icon-angle-down"></i></div></a></li>
                            <li class="menu-item"><a class="menu-link" href="paymentMethods.php" style=""><div>Metode de plată</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="paymentInInstallments.php" style=""><div>Plata în rate</div></a></li>
                            <li class="menu-item"><a class="menu-link" href="howToBuy.php" style=""><div>Cum cumpăr</div></a></li>
                        </ul>
                    </nav>
                    <form class="top-search-form" action="search.html" method="get" style="">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-wrap-clone" style="height: 52px;"></div>
    </header>