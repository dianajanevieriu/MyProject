<?php

use Classes\Product;

?>

<div class="col-lg-9 px-4">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/noutati.png" class="img-fluid rounded-start" alt="noutati">
                    </div>
                    <div class="col-md-8" style="height: 130px">
                        <div class="card-body">
                            <h4 class="card-title"  style="height: 60px">Noutăți materiale confecții</h4>
                            <a href="news.php" class="btn btn-danger">Către categorie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/reviews.png" class="img-fluid rounded-start mt-2" alt="parere clienti">
                    </div>
                    <div class="col-md-8" style="height: 130px">
                        <div class="card-body">
                            <h4 class="card-title" style="height: 60px">Părerea clienților</h4>
                            <a href="reviews.php" class="btn btn-danger">Către categorie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row text-center">
        <p class="fs-5 mt-6 mb-3"><strong>Vindem la metru peste 100 modele de materiale textile.</strong></p>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <button type="button" class="btn btn-outline-success px-6 text-center text-secondary" style="border-radius: 8px; border-color: rgb(14, 193, 47); color: rgb(14, 193, 47); font-family: inherit; font-style: normal; background-color: rgba(0, 0, 0, 0); box-shadow: rgba(0, 0, 0, 0.3) 0px 4px 12px 0px;">
                <p class="fs-5 mb-1"><strong>21 categorii materiale</strong></p>
                <p class="fs-5 mb-0"><strong>în meniul Didi Shop</strong></p>
            </button>
        </div>
    </div>
    <div class="row text-center">
        <p class="fs-6 mt-3">De la Dantelă, Mătase și Catifea până la Fâș, Imitație piele și altele.</p>
    </div>
    <div class="row ms-3">
        <p class="fs-6 mt-3">Didi Shop este magazin online de <strong>materiale textile și accesorii</strong> pentru <strong>croitorie, cu zece ani de activitate online</strong>. Materialele pe care vi le punem la dispoziție sunt de calitate superioara, potrivite atât pentru confecționarea hainelor de damă, cât și pentru cele bărbătești sau destinate copiilor.</p>
        <p class="fs-6">Pe lângă materialele folosite în crearea pieselor vestimentare, pe Didi Shop puteți comanda și <strong>materiale preoțești, materiale decorațiuni,</strong> dar și <strong>pasmanterie și aplicații.</strong></p>
        <p class="fs-5"><strong>Spor la cumpărături!</strong></p>
    </div>
    <div class="row ms-3">
        <?php
        $product = new Product(10);
        $product->card();
        ?>
    </div>
</div>