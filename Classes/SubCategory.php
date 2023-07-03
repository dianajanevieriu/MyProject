<?php
namespace Classes;

class SubCategory extends Base
{
    public $name;
    public $mainCategoryId;
    public $description;


    public function getProducts():array {
        return Product::findBy('subCategoryId', $this->getId());
    }

    public static function getTableName()
    {
        return "subCategories";
    }
}