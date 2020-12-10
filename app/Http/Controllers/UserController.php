<?php


namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController
{
    public function showCategory(Category $category)
    {
        return view("user.category", ["category" => $category]);
    }

    public function showProduct(Product $product)
    {
        return view("user.product", ["product" => $product]);
    }

    public function addToCart(Product $product)
    {
        $cart = Cart::getInstance();
        if (array_key_exists($product->id, $cart->getItems())) {
            $value = $cart->getItemAmount($product->id) + 1;
        }
        else{
            $value = 1;
        }

        $cart->addItem($product->id, $value);

        return redirect("/cart");
    }

    public function showCart()
    {
        return view("user.cart", ["products" => Cart::getInstance()->getItems()]);
    }

    public function finalizeOrder()
    {
        return view("user.order");
    }

    public function handleOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'zipcode' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255']
        ]);

        if ($validator->fails()) {
            return redirect('/order')
                ->withErrors($validator)
                ->withInput();
        }
        return redirect("/orderlist");
    }

    public function orderList(){
        return view("user.cart", ["orders" => DB::table("order_list")->where("userid", Auth::user()->id)]);
    }


    public function setCart(Request $request)
    {
        if (!$request->has("id") || !$request->has("newVal"))
            return ["response" => false,
                "has_id" => $request->has("id"), "newVal" => $request->has("newVal")];

        $product_id = intval($request->get("id"));
        $new = intval($request->get("newVal"));

        $cart = Cart::getInstance();

        if ($new <= 0) {
            $cart->removeItem($product_id, $new);
        } else if ($cart->getItems()[$product_id] < $new) {
            $cart->addItem($product_id, $new);
        } else {
            $cart->removeItem($product_id, $new);
        }

        return ["response" => true];
    }
}
