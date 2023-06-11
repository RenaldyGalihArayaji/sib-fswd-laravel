<?php

namespace App\Models;

use App\Models\DaftarProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_product';

    protected $fillable = ['name']; 

    public function daftar()
    {
        return $this->belongsTo(DaftarProduct::class , 'category_id','id');
    }
}
