<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    // protected $table="posts";
    // protected $primarykey = "id";
    // protected $keytype = "tring";
    // public $incrementing = false; // tắt trạng thái tự động

    // protected $connection = "laravel";
    protected $fillable = [
        'title', 
        'content'
    ];
}
