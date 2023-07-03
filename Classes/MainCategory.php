<?php
namespace Classes;

class MainCategory extends Base
{
    public $name;


    public function getSubCategories():array {
        return SubCategory::findBy('mainCategoryId', $this->getId());
    }

    public static function getTableName()
    {
        return "mainCategories";
    }
}