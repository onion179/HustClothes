<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Tests\Cache\CacheArrayStoreTest;


class CartController extends Controller
{
    private $productServie;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productServie = $productService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.shop.cart', compact('carts', 'total', 'subtotal'));
    }

    public function add(Request $request)
    {
       if ($request->ajax()) {
           $product = $this->productServie->find($request->productId);

           $response['cart'] = Cart::add([
               'id' => $product->id,
               'name' => $product->name,
               'qty' => 1,
               'price' => $product->discount ?? $product->price,
               'weight' => $product->weight ?? 0,
               'options' => [
                   'images' => $product->productImages,
               ],
           ]);

           $response['count'] = Cart::count();
           $response['total'] = Cart::total();

           return $response;
       }

        return back();
    }

    public function delete(Request $request)
    {
        if ($request->ajax()){
            $response['cart'] = Cart::remove($request->rowId);

            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response['subtotal'] = Cart::subtotal();

            return $response;
        }

        return back();
    }

    public function destroy()
    {
        Cart::destroy();
    }

    public function update(Request $request)
    {
        if ($request->ajax()) {
            $response['cart'] = Cart::update($request->rowId, $request->qty);

            $response['count'] = Cart::count();
            $response['total'] = Cart::total();
            $response['subtotal'] = Cart::subtotal();

            return $response;
        }
    }
}
