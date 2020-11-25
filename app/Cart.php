<?php


namespace App;


use Illuminate\Support\Facades\Session;

class cart
{
    private $items = [];

    public static function getInstance(): Cart
    {
        $cart = Session::get("cart");
        if (!isset($cart))
            Session::put("cart", ($cart = new Cart())->serialize());
        else
            $cart = self::deserialize($cart);
        return $cart;
    }

    public function __construct()
    {

    }

    public function addItem($productid, $amount = 1)
    {
        if (array_key_exists($productid, $this->items)) {
            $this->items[$productid] = $amount;
        } else {
            $this->items[$productid] = $amount;
        }
        $this->saveSession();
    }

    public function removeItem($productid, $amount = 1)
    {
        $this->items[$productid] = $amount;
        if ($this->items[$productid] == 0) {
            unset($this->items[$productid]);
        }
        $this->saveSession();
    }

    public function saveSession(): void
    {
        Session::put("cart", $this->serialize());
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getItemAmount($productid): int
    {
        return $this->items[$productid];
    }

    public function clearCart()
    {
        $this->items = [];
    }

    private function serialize(): array
    {
        return $this->items;
    }

    private static function deserialize(array $input): Cart
    {
        $cart = new Cart();
        $cart->items = $input;
        return $cart;
    }

}

