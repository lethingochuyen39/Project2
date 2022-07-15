<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductType;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Product_Type;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {

        return view('user.pages.home');
    }
    public function product()
    {
        $products = Product::all();
        $brand = Brand::all();
        $category = Product_Type::all();
        return view('user.pages.product', ['products' => $products, 'brand' => $brand,'category'=>$category]);
    }

    public function show_brand(Request $request, $id)
    {
        $products = Product::all();
        $category = Product_Type::all();
        $brand = Brand::find($id)->limit(2)->get();
        return view('user.pages.show_brand',['products' => $products,'brand'=>$brand,'category'=>$category])->with('name',$brand);

    }

    public function detailProduct($product_id)
    {
        $details = Product::find($product_id);
        $slider = Slider::where('product_id','=',$product_id)->orderBy('numerical_order')->get();

        return view('user.pages.detailProduct', ['details' => $details, 'slider' => $slider]);
    }
}
