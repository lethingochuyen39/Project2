<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Brand;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        
        return view('user.pages.home');
    }
    public function product(){
        $products = Product::all();
        $brands = Brand::all();

        return view('user.pages.product',['products' => $products,'brands'=>$brands]);
    }
    public function detailProduct($product_id){
        $details = Product::find($product_id);
        $slider1 = Slider::find($product_id)->where('numerical_order','=',1)->first();
        $slider2 = Slider::find($product_id)->where('numerical_order','=',2)->first();
        $slider3 = Slider::find($product_id)->where('numerical_order','=',3)->first();
        $slider4 = Slider::find($product_id)->where('numerical_order','=',4)->first();

        return view('user.pages.detailProduct',['details'=>$details,'slider1'=>$slider1,'slider2'=>$slider2,'slider3'=>$slider3,'slider4'=>$slider4,]);
    }
}
