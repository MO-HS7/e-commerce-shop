<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function products()
    {
        // مصفوفة منتجات تجريبية
        $products = [
            ['name' => 'حقيبة يمنية', 'price' => 120, 'on_sale' => true, 'description' => 'حقيبة تقليدية بتطريز يدوي'],
            ['name' => 'حذاء مطرز', 'price' => 85, 'on_sale' => false, 'description' => 'حذاء يمني تقليدي'],
            ['name' => 'إكسسوارات فضية', 'price' => 95, 'on_sale' => true, 'description' => 'إكسسوارات مصنوعة يدويًا'],
        ];
        return view('shop.products', compact('products'));
    }

    public function productDetails()
    {
        $product = [
            'name' => 'حقيبة يمنية',
            'price' => 120,
            'old_price' => 150,
            'description' => 'حقيبة تقليدية بتصميم يدوي',
            'manufacturer' => 'Yemen Lady',
        ];
        return view('shop.product-details', compact('product'));
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function aboutUs()
    {
        $title = "عن Yemen Lady";
        $description = "متجر يقدم منتجات نسائية يمنية أصيلة تجمع بين الطابع التراثي والتصميم العصري.";
        $rawHtml = "<strong>⚠️ ملاحظة:</strong> استخدام {!! !!} لعرض HTML خام فيه مخاطر أمنية إذا لم يتم الفلترة!";
        return view('shop.about-us', compact('title', 'description', 'rawHtml'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}
