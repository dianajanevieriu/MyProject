<?php

use Classes\SubCategory;

include 'parts/header.php';
$id = $_GET['id'];
$subCategory = new SubCategory($id);

?>
    <div class="container clearfix">
        <div class="row my-5">
            <?php include 'parts/sideContent.php';?>
            <div class="col-lg-9 ps-5">
                <div class="row">
                    <div class="col-12" style="height: 30px">
                        <nav class="text-left" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" aria-curent="page"><a href="index.php" class="text-info">Introducere</a></li>
                                <li class="breadcrumb-item active text-black-50"  aria-current="page"><?php echo $subCategory->name; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h4 class="mb-2 ms-4"><?php echo $subCategory->name; ?></h4>
                        <p class="ms-4"><?php echo $subCategory->description; ?></p>
                        <p  class="ms-4 mb-2"><i class="fa-solid fa-sort me-2"></i><strong>Ordonează după:</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="btn-group ms-4 mb-2" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">Cel mai ieftin</button>
                            <button type="button" class="btn btn-outline-secondary">Cel mai scump</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($subCategory->getProducts() as $product) {
                        $product->card();
                    } ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'parts/footer.php';?>