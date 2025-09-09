<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    protected function productsData()
    {
        return [
            ['id'=>1,'name'=>'Wireless Headphones','price'=>99.99,'on_sale'=>true,'description'=>'Headphones with great sound','image'=>'images/headphones.jpg'],
            ['id'=>2,'name'=>'Gaming Mouse','price'=>49.99,'on_sale'=>false,'description'=>'High precision mouse','image'=>'images/mouse.jpg'],
            ['id'=>3,'name'=>'Mechanical Keyboard','price'=>129.99,'on_sale'=>true,'description'=>'RGB mechanical keyboard','image'=>'images/keyboard.jpg'],
        ];
    }

    public function products()
    {
        $products = $this->productsData();
        return view('shop.products', compact('products'));
    }

    public function productDetails($id)
    {
        $products = $this->productsData();
        $product = collect($products)->firstWhere('id', (int)$id);

        if (!$product) {
            abort(404);
        }

        return view('shop.product-details', compact('product'));
    }

    public function cart()
    {
        // بيانات dummy للسلة
        $cart = [
            ['product_id'=>1,'name'=>'Wireless Headphones','qty'=>1,'price'=>99.99],
            ['product_id'=>2,'name'=>'Gaming Mouse','qty'=>2,'price'=>49.99],
        ];
        return view('shop.cart', compact('cart'));
    }

    public function about()
    {
        $title = 'من نحن';
        $description = 'هذه صفحة عن المتجر. نهدف إلى تقديم أفضل المنتجات.';
        $rawHtml = '<p><strong>Shoppatty</strong> متجر إلكتروني    .</p>';

        return view('shop.about-us', compact('title','description','rawHtml'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}
