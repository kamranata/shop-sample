<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Http\Requests\CreateOrderRequest;
use App\Mail\OrderCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('brand')->get();

        return view('products')->with(compact(
            'products'
        ));
    }

    public function checkout(Request $request)
    {
    	$product_id = $request->product_id;

        return view('checkout')->with(compact('product_id'));
    }

    public function process(CreateOrderRequest $request)
    {
    	$product = Product::findOrFail($request->product_id);

    	$order = Order::create([
	        'total_product_value'  => $product->price,
	        'total_shipping_value' => $validated['shipping'],
	        'client_name'          => $validated['name'],
	        'client_address'       => $validated['address']
    	]);

        // Mail::queue(new OrderCreated($order));

        return view('process')->with(compact('order'));
    }

    public function order(Order $order)
    {
    	return 'Thank you. Your order # ' . $order->id;
    }
}
