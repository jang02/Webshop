<?php


namespace App\Http\Controllers;


use App\Category;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function MongoDB\BSON\toJSON;

class UserController
{
    public function showCategory(Category $category)
    {
        return view("user.category", ["category" => $category]);
    }

    public function showProduct(Product $product)
    {
        $description = json_decode($product->description);
        return view("user.product", ["product" => $product, "description" => $description]);
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
        if(sizeof(Cart::getInstance()->getItems()) > 0){
            return view("user.order");
        }
        else{
            return view("user.cart");

        }

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

        $orderid = null;
        while(count(DB::table("orders_list")->where('orderid', $orderid)->get()) > 0 || $orderid == null){
            $orderid = substr(md5(rand()), 0, 8);
        }

        DB::table('orders_list')->insert([
            'orderid' => $orderid,
            'userid' => Auth::user()->id,
            'firstname' => $request->get("firstName"),
            'lastname' => $request->get("lastName"),
            'country' => $request->get("country"),
            'state' => $request->get("state"),
            'street' => $request->get("street"),
            'number' => $request->get("number"),
            'zipcode' => $request->get("zipcode"),
            'city' => $request->get("city"),
            'price' => Cart::getInstance()->getPrice(),
            'created_at' => Date::now(),
        ]);

        foreach(Cart::getInstance()->getItems() as $item => $amount){
            DB::table('orderitems')->insert([
                'itemid' => $item,
                'orderid' => $orderid,
                'amount' => $amount,
                'created_at' => Date::now(),
            ]);
        }
        \App\Cart::getInstance()->clearCart();
        return redirect("/orderlist");
    }

    public function orderList(){
        return view("user.orderlist", ["orderslist" => DB::table("orders_list")->where("userid", Auth::user()->id)->get()]);
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
