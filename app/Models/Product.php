<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'price',
        'quantity',
        'image',
        'category_id',
        'status',
        'created_at',
        'update_at'
    ];
    public function loadAllDataProductWithPager(){
        // ORM
        $query = Product::query()
            ->latest('id')
            ->paginate(10);
        return $query;

    }
}
