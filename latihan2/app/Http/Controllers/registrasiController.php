<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class registrasiController extends Controller
{
    public function index()
    {
        return view('login.registrasi',["title" => "Registrasi"]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // mengehash password
        $validateData['password'] = Hash::make($validateData['password']);


        // insert ke database
        User::create($validateData);

        // rederect
        return Redirect('/login')->with('success' , 'Registrasi Sudah Berhasil!!');


    }
}
