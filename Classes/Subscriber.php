<?php
namespace Classes;

class Subscriber extends Base
{
    public $email;
    public $fullName;

    public static function getTableName()
    {
        return "subscribers";
    }
}