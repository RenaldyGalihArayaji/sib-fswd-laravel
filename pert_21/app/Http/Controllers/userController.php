<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        $data = Users::all();
        return view('dataUser',['data'=> $data]);
    }
}
