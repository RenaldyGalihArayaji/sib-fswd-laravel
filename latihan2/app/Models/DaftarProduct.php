<?php

namespace App\Models;

use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarProduct extends Model
{
    use HasFactory;

    protected $table = 'daftar_product';

    
    protected $fillable = [
        'name',
        'category_id',
        'qty',
        'price',
        'description',
        'image'
    ];

    public function category()
    {
        return $this->hasMany(CategoryProduct::class , 'category_id','id');
    }
}
