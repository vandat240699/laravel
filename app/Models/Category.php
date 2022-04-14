<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'status',
        'slug'
    ];

    // public function products(){
    //     return $this->hasMany(Product::class);
    // }

    public function product1(){
        return $this->belongsToMany(
            Product::class,
            'category_product',
            'category_id',
            'product_id',
        );
    }
}
