<?php

use Classes\Product;

include 'parts/header.php';
$id = $_GET['id'];
$product = new Product($id);
//var_export($product);
?>
    <div class="container clearfix">
        <div class="row my-5">
            <?php include 'parts/sideContent.php';?>
            <div class="col-lg-9 ps-5">
                <div class="row" style="height: 20px">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Introducere</a></li>
                                <li class="breadcrumb-item"><a href="#"><?php echo $product->getSubCategory()->name ;?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $product->name;?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <section id="content">
                    <div class="content-wrap pt-2">
                        <div class="container clearfix">
                            <div class="single-product">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3><?php echo $product->name;?></h3>
                                        </div>
                                    </div>
                                    <div class="row gutter-40">
                                        <div class="col-md-6">
                                            <img src="images/bumbac1.png">
                                        </div>
                                        <div class="col-md-6 product-desc">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="product-price"><ins><?php echo formatNumber($product->price);?> LEI</ins></div>
                                            </div>
                                            <div class="line"></div>
                                            <form class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype="multipart/form-data" action="addToCart.php">
                                                <div class="quantity clearfix">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                                <button type="button" class="btn btn-primary">Cumpără</button>
                                            </form>
                                            <div class="line"></div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <span class="text-muted">Număr produs:</span><span class="text-dark fw-semibold"><?php echo $product->code; ?></span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <span class="text-muted">Preț fără TVA:</span><span class="text-dark fw-semibold"><?php echo formatNumber($product->getPriceWithoutTva()); ?> LEI</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <span class="text-muted">Plata în rate? Detalii aici: <a href="paymentInInstallments.php">detalii aici!</a>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                                    <span class="text-muted">Mai multe modele și culori aici: <a href="subCategoryPage.php?id=<?php echo $product->getSubCategory()->getId(); ?>"><?php echo $product->getSubCategory()->name ;?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-12 mt-5 mb-0">
                                            <div class="tabs clearfix mb-0 ui-tabs ui-corner-all ui-widget ui-widget-content" id="tab-1">
                                                <div class="tab-container">
                                                    <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                                                        <h4 class="mb-2">Descriere materiale textile</h4>
                                                        <p class="mb-2"><?php echo $product->name;?></p>
                                                        <p class="mb-2">Lățime: <?php echo formatNumber($product->width);?> metri</p>
                                                        <p class="mb-0"><?php echo $product->description;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line mt-4 mb-5"></div>
                            <div class="row mt-4">
                                <h4>Alții au cumpărat</h4>
                            </div>
                            <?php
                            foreach (array_slice($product->getSubCategory()->getProducts(),0,4) as $similarProduct){
                                if($similarProduct->id != $product->getId()){
                                    $similarProduct->card();
                                }
                            }
                            ?>
<!--                            <div class="col-3">-->
<!--                                <a href="product.php" class="btn">-->
<!--                                    <div class="card">-->
<!--                                        <img src="images/catifea1.png" class="card-img-top p-1" alt="back-up">-->
<!--                                        <div class="card-body">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-7"></div>-->
<!--                                                <div class="col-5 text-secondary">cod produs</div>-->
<!--                                            </div>-->
<!--                                            <h4 class="card-title">Catifea elastica rosie</h4>-->
<!--                                            <p class="card-text text-end"><strong class="fs-4">pret LEI</strong></p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </a>-->
<!--                            </div>-->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php include 'parts/footer.php';?>