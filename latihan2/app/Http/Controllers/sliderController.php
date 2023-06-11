<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\DaftarProduct;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class sliderController extends Controller
{
    public function index()
    {
        $data = Slider::all();
        return view('slider.slider',["title" => "slider" , "data" => $data] , compact('data'));
    }

    public function create()
    {
        return view('slider.slider-create',["title" => "slider-create"]);
    }

    public function update(Request $request)
    {
        //validate form
        $validate = $this->validate($request, [
            'image'     => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5'
        ]);
    
        if ($request->hasFile('image')) {
            $name = $request->file('image');
            $fileName = 'produk_'. time() .'.'. $name->getClientOriginalExtension();
            Storage::putFileAs('public/gambar',$request->file('image'),$fileName);
        }

        Slider::create([
            "title" => $request->title,
            "image" => $fileName
        ]);
      
        return redirect('/slider')->with('success','Data Berhasil di Tambahkan!!');
    }

    public function edit($id)
    {
        $data = Slider::where('id', $id)->first();
        return view('slider.slider-edit',["title" => "Slider-edit"], compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3'
        ]);


        Slider::find($request->id)->update([
            'title' => $request->title
        ]);

       return redirect('/slider');

    }
    // public function update(Request $request , $id)
    // {

    //     $validator = Validator::make($request->all(), [
    //         'image'     => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'title'     => 'required|min:5'
    //     ]);
 
    //     if ($validator->fails()) {
    //         return back()
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }
        
    //     $data = Slider::where('id', $id)->first();


    //     // Cek apakah upload file
    //     if ($request->hasFile('image')) {

    //         // Menghapus image lama dari storage
    //         $delete = Storage::delete('public/gambar/' . $data->image);

    //         // Upload image baru dengan format nama ditentukan
    //         $name = $request->file('image');
    //         $fileName = 'Produk_' . time() . '.' . $name->getClientOriginalExtension();
    //         $path = Storage::putFileAs('public/gambar', $request->file('image'), $fileName);

    //         // Update file di database
    //         $data->update([
    //             'image' => $fileName,
    //         ]);
    //     }

        // Slider::find($request->id)->update([
        //     'title' => $request->title,
        //     'image' => $fileName
        // ]);

        // Update Data di database
        // $data->update([
        //     'title' => $request->title,
        //     'image' => $fileName
        // ]);

    //     return redirect('/slider')->with('Sukses!', 'Data Berhasil Diupdate');
    // }


    public function delete($id)
    {
        $data = Slider::find($id)->delete();
        return Redirect('/slider');
    }

    // public function update(Request $request , $id)
    // {
    //     // form validate
    //     $this->validate($request, [
    //         'image'     => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'title'     => 'required|min:5'
    //     ]);


    //     if ($request->hasFile('image')) {
    //        //upload new image
    //         $image = $request->file('image');
    //         $image->storeAs('/storage/public/gambar/', $image->hashName());

    //         //delete old image
    //         Storage::delete('/storage/public/gambar/'.$request->image);

    //         //update post with new image
    //         $request->update([
    //             'image' => $image->hashName(),
    //             'title' => $request->title,
    //         ]);

    //     }else{
    //         //update post without image
    //         $request->update([
    //             'title' => $request->title,
    //         ]);
    //     }


    //     return redirect('/slider')->with('success','Data Berhasil di Edit!!');
    // }



    
}
