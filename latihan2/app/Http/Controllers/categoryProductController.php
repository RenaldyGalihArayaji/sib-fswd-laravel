<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class categoryProductController extends Controller
{
    public function index()
    {
        $data = CategoryProduct::with('daftar')->get();
        return view('products.category-product',["title" => "category-product" , "data" => $data] , compact('data'));
    }

    public function create()
    {
        return view('products.category-create',["title" => "category-create"]);
    }

    public function store(Request $request)
    {
        CategoryProduct::create([
            'name'=> $request->name
        ]);

        return Redirect('/category-product')->with('success','Data Berhasil di Tambahkan!!');
    }

    public function edit($id)
    {
        $data = CategoryProduct::where('id', $id)->first();
        return view('products.category-edit',["title" => "category-edit"], compact('data'));
    }

    public function update(Request $request)
    {
        $data = CategoryProduct::find($request->id)->update([
            'name' => $request->name
        ]);
        return Redirect('/category-product')->with('success','Data Berhasil di Edit!!');
    }

    public function delete($id)
    {
        $data = CategoryProduct::find($id)->delete();
        return Redirect('/category-product');
    }
}
