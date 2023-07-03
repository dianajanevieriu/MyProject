<?php
namespace Classes;

class Image extends Base
{
    public $id;
    public $name;
//    public $productId;


    public static function getTableName()
    {
        return "images";
    }
}