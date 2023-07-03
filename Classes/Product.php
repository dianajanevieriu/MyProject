<?php
namespace Classes;

class Product extends Base
{
    const TVA_VALUE = 19;
    public $name;
    public $price;
    public $code;
    public $tva;
    public $description;
    public $width;
    public $composition;
    public $subCategoryId;
    public $date;

    /**
     * @return mixed
     */
    public function getSubCategory()
    {
        return new SubCategory ($this->subCategoryId);
    }

    public function getPriceWithoutTva (){
        $price = $this->price - $this->price * static::TVA_VALUE/100;
        return $price;
    }

    function formatNumber($number) {
        return number_format((float)$number, 2, '.', '');
    }

    public function getImage() {
        return Image::findBy('productId', $this->getId());
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function card() {
        echo '<div class="col-4 px-2">
            <a href="product.php?id='.$this->getId().'">
                <div class="card"  style="height: 545px">
                    <div class="d-flex" style="height: 400px;align-items: center;justify-content: center">
                        <img src="images/'.$this->getImage().'" class="card-img-top p-1" alt="back-up image">
                    </div>
                    <div class="card-body p-2" style="height: 132px">
                            <div class="row">
                                <div class="col-5"></div>
                                <div class="col-7 text-secondary text-end">'.$this->code.'</div>
                            </div>
                            <div class="row">
                                <div class="col-12 align-middle">
                                    <h4 class="card-title text-center" style="height: 70px">'.$this->name.'</h4>
                                </div>
                            </div>
                            <p class="card-text text-end text-success"><strong class="fs-5">'.$this->formatNumber($this->price).' LEI</strong></p>
                    </div>
                </div>
            </a>
        </div>';
    }

    public static function getTableName(): string
    {
        return 'products';
    }
}