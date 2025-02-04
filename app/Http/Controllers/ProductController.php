<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        // Decode the JSON string to PHP array
        $productArray = json_decode($products, true);
        $product_des = Product::get();
        if (is_array($productArray) && count($productArray) > 0) {
            // Extract the first object (assuming there's at least one object)

            $title = $productArray[0]['title'] ?? null;
            $body = $productArray[0]['body'] ?? null;


            // Output the title and body
            return view('product', compact( 'title', 'body', 'product_des'));
        } else {
            dd('Invalid or empty JSON content.');
        }
    }
}
