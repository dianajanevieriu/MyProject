<?php
use Classes\Product;

include 'parts/header.php';

$query = "SELECT * FROM products";
$filters=[];

//var_dump($_GET);
//die();

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $filters = "name LIKE'%$search%' OR description LIKE '%$search%' OR code LIKE '%$search%'";
}

//if(isset($_GET['search'])) {
//    $searchIds = $_GET['search'];
//    var_export($searchIds);
//    die();
//    $searchFilter= [];
//    foreach ($searchIds as $searchId) {
//        $searchFilter[]= "vendor_id=$vendorId";
//    }
//    if(count($searchFilter)>0){
//        $filters[]=   '('.implode(' OR ', $searchFilter).')';
//    }
//}

if(count($filters)>0) {
    $filterString = implode(' AND ', $filters);
    $query .= ' WHERE '.$filterString;
}

$searchedProducts = query($query);
$products= [];
foreach ($searchedProducts as $searchedProduct) {
    $products[] = new Product($searchedProduct['id']);
}
?>

?>
    <div class="container clearfix">
        <div class="row my-5">
            <?php include 'parts/sideContent.php';?>
            <div class="col-lg-9 ps-4">
                <div class="row text-center">
                    <div class="col-12">
                        <h3 class="mb-2"><i class="fas fa-search"></i>Căutare</h3>
                        <p>Cuvântul căutat:<span class="text-info"><?php echo $_GET['search']; ?></span></p>
                    </div>
                </div>
                <div class="row ms-3">
                    <?php
                    foreach ($products as $product) {
                        $product ->card();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'parts/footer.php';?>