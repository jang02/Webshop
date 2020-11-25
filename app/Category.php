<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getProducts(): array {
        $result = [];
        foreach(Product::all() as $product) {
            if ($product->category_id === $this->id) {
                array_push($result, $product);
            }
        }
        return $result;
    }
}
