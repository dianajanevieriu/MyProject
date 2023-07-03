<?php
namespace Classes;

class User extends Base
{
    public $firstName;
    public $lastName;
    public $role;
    public $avatar;
    public $username;
    public $password;
    public $email;
    public $status;


    public function getCarts() {

    }

    public function getAddresses() {
        return Address::findBy('userId', $this->getId());
    }

    public static function getTableName()
    {
        return "users";
    }
}