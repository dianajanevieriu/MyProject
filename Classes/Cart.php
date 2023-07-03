<?php
namespace Classes;

class Cart extends Base
{
    public $userId;


    /**
     * @return CartItem[]
     */
    public function getCartItems(): array
    {
        return CartItem::findBy('cartId', $this->getId());
    }

    /**
     * @return User
     */
    public function getUser():User {
        return new User($this->userId);
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->getCartItems() as $cartItem ) {
            $total +=  $cartItem->getTotal();
        }
        return $total;
    }

    public function getFinalTotal() {
        $total = $this->getTotal();
        if($total > 350) {
            return $total;
        } else {
            return $total + 18;
        }
    }

    public function add($productId) {
        $cartItem = query("SELECT * FROM cart_items WHERE productId=$productId AND cartId={$this->getId()}");

        if(count($cartItem)> 0) {
            $cartItem = new CartItem($cartItem[0]['id']);
            $cartItem->quantity = $cartItem->quantity+1;
            $cartItem->save();
        } else {
            $cartItem = new CartItem();
            $cartItem->cartId = $this->getId();
            $cartItem->productId = $productId;
            $cartItem->quantity = 1;
//            if (!is_null($parentId)) {
//                $cartItem->parentId = $parentId;
//            }
            $cartItem->save();
        }
    }

//    public function add($productId, $parentId = null) {
//        if(is_null($parentId)) {
//            $cartItem = query("SELECT * FROM cart_items WHERE product_id=$productId AND cart_id={$this->getId()}");
//        } else {
//            $cartItem = query("SELECT * FROM cart_items WHERE product_id=$productId AND parent_id=$parentId AND cart_id={$this->getId()}" );
//        }
//
//        if(count($cartItem)> 0) {
//            $cartItem =new CartItem($cartItem[0]['id']);
//            $cartItem->quantity = $cartItem->quantity+1;
//            $cartItem->save();
//        } else {
//            $cartItem = new CartItem();
//            $cartItem->cartId = $this->getId();
//            $cartItem->productId = $productId;
//            $cartItem->quantity = 1;
//            if(!is_null($parentId)){
//                $cartItem->parentId = $parentId;
//            }
//            $cartItem->save();
//        }
//    }

    public function getProductCount(): int
    {
        $totalProducts =0;
        foreach ($this->getCartItems()  as $cartItem) {
            $totalProducts += $cartItem->quantity;
        }
        return $totalProducts;
    }

    public static function getTableName()
    {
        return 'carts';
    }
}