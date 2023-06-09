<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_products';

    protected $fillable = ['name'];

    public function daftarProduct() 
    {
        return $this->hasMany(DaftarProduct::class , 'category_id' , 'id');
    }
}
