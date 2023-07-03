<?php

use Classes\Product;

include 'parts/header.php';
?>
    <div class="container clearfix">
        <div class="row my-5">
            <?php include 'parts/sideContent.php';?>
            <div class="col-lg-9 px-4">
                <div class="row">
                    <div class="col-12" style="height: 30px">
                        <nav class="text-left" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-curent="page"><a href="index.php" class="text-info">Introducere</a></li>
                                <li class="breadcrumb-item active text-black-50"  aria-current="page">Noutăți materiale confecții</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h4 class="mb-2 ms-4">Noutăți Didi Shop</h4>
                        <p class="ms-4">Fie ca esti in cautarea unor materiale pentru tinute extravagante sau cauti ceva simplu, pe gustul tau, Didi Shop are mereu noutati in toate categoriile.</p>
                        <p  class="ms-4 mb-2"><i class="fa-solid fa-sort me-2"></i><strong>Ordonează după:</strong></p>
                        <div class="btn-group ms-4 mb-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Cel mai ieftin</button>
                            <button type="button" class="btn btn-outline-secondary">Cel mai scump</button>
                        </div>
                    </div>
                </div>
                <div class="row ms-3">
                    <?php
                    $newProductIds= query('SELECT id from products ORDER BY id DESC LIMIT 16');
                    foreach($newProductIds as $newProductId){
                        $product= new Product($newProductId['id']);
                        $product->card();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'parts/footer.php';?>