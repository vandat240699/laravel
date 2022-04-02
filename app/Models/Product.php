<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'image',
        'category',
        'price',
        'status',
        'sl',
        'slug',
    ];

    // public function category1(){
    //     return $this->belongsTo(Category::class, 'category');
    // }

    public function category2(){
        return $this->belongsToMany(
            Category::class,
            'category_product',
            'product_id',
            'category_id',
        );
    }
}
