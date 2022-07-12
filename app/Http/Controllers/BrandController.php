<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\BrandRequest;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', ['brands' => $brands]);
    }
    public function create()
    {
        return view('admin.brand.create');
    }
    public function postCreate(BrandRequest $request)
    {
        $brand = $request->all();
        $p = new Brand($brand);
        $p->save();
        return redirect()->route('brand.index');
    }
    public function update($brand_id)
    {
        $p = Brand::find($brand_id);
        return view('admin.brand.update', ['p' => $p]);
    }
    public function postUpdate(BrandRequest $request, $brand_id)
    {
        $brand = $request->all();
        $p = Brand::find($brand_id);
        $p->brand_name = $brand['brand_name'];
        $p->save();
        return redirect()->route('brand.index');
    }
    public function delete($brand_id)
    {
        $p = Brand::find($brand_id);
        $p->delete();
        return redirect()->route('brand.index');
    }
}
