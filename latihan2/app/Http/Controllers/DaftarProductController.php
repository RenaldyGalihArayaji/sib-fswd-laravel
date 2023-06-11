<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarProduct;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Storage;

class DaftarProductController extends Controller
{
    public function index()
    {
        $data = DaftarProduct::all();
        return view('products.daftar-product.daftar-product',["title" => "Daftar-Product", "data" => $data]);
    }

    public function create()
    {
        $dataCategory = CategoryProduct::all();
        return view('products.daftar-product.daftar-create',["title" => "Daftar-create" , "data" => $dataCategory] , compact('dataCategory'));
    }

    public function store(Request $request)
    {
        $validator = DaftarProduct::make($request->all(), [
            "name" => 'required|max:255',
            "category_id" => 'required',
            "qty"   => 'required',
            "price" => 'required',
            "description" => 'required|min:5',
            "image" => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
 
        // if ($validator->fails()) {
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // Cek apakah upload file
        if ($request->hasFile('file')) {
            $name = $request->file('file');
            $fileName = 'Produk_' . time() . '.' . $name->getClientOriginalExtension();
            $path = Storage::putFileAs('public/gambar', $request->file('file'), $fileName);
        }

        DaftarProduct::create([    
            'name' => $request->name,
            'category_id' => $request->category_id,
            'qty' => $request->qty,
            'price' => $request->price,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName,
        ]);

        return Redirect('/daftar-product')->with('success','Data Berhasil di Tambahkan!!');
    }

    // public function store(Request $request)
    // {
    //     // Validasi
    //     $this->validate($request,[
    //         "name" => 'required|max:255',
    //         "category_id" => 'required',
    //         "qty"   => 'required',
    //         "price" => 'required',
    //         "description" => 'required|min:5',
    //         "image" => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048'

    //     ]);

    //     // Uploud Gambar
    //     if ($request->hasFile('image')) {
    //         $name = $request->file('image');
    //         $fileName = 'produc_'. time() .'.'. $name->getClientOriginalExtension();
    //         Storage::putFileAs('public/gambar', $request->file('image'),$fileName);
    //     }

    //     // create data
    //    DaftarProduct::create([
    //         "name" => $request->name,
    //         "category_id" => $request->category_id,
    //         "qty" => $request->qty,
    //         "price" => $request->price,
    //         "description " => $request->description,
    //         "image" => $fileName
    //     ]);


    //     // rederect
    //     return Redirect('/daftar-product')->with('success','Data Berhasil di Tambahkan!!');
    // }
}
